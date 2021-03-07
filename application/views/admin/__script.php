<script>
  $(document).ready( function () {
    tampil_data();

    $('#datatable').DataTable();

    function tampil_data(){
        $.ajax({
            type  : 'ajax',
            url   : '<?php echo base_url()?>pinjam/data_pinjam',
            async : false,
            dataType : 'json',
            success : function(data){
                var html = '';
                var i;
                for(i=0; i<data.length; i++){
                    html += '<tr>'+
                                '<td>'+data[i].id_peminjaman+'</td>'+
                                '<td>'+data[i].nama_peminjam+'</td>'+
                                '<td>'+data[i].berkas_dipinjam+'</td>'+
                                '<td>'+data[i].tgl_pinjam+'</td>'+
                                '<td>'+data[i].tgl_kembali+'</td>'+
                                '<td>'+data[i].nama_pegawai+'</td>'+
                                '<td>'+
                                  '<button class="btn btn-primary btn-sm item_edit" data="'+data[i].id_peminjaman+'"><i class="fa fa-edit"></i></button>'+' '+
                                  '<button class="btn btn-danger btn-sm item_hapus" data="'+data[i].id_peminjaman+'"><i class="fa fa-remove"></i></button>'+
                                '</td>'+
                            '</tr>';
                }
                $('#data_pinjam').html(html);
            }

        });
    }

    // // reset FORM TAMBAH
    // $(document).on('click', '#btn_tambah', function(event) {
    //   event.preventDefault();
    //   $('#form')[0].reset(); // reset form on modals
    // });

    //GET UPDATE
    $('#data_pinjam').on('click','.item_edit',function(){
        var id_peminjaman=$(this).attr('data');
        $.ajax({
            type : "GET",
            url  : "<?php echo base_url('pinjam/edit')?>/" + id_peminjaman,
            dataType : "JSON",
            success: function(data){
              $('#modal_edit').modal('show');
              $('[name="id_peminjaman"]').val(data.id_peminjaman);
              $('[name="nama_peminjam"]').val(data.nama_peminjam);
              $('[name="tgl_pinjam"]').val(data.tgl_pinjam);
              $('[name="tgl_kembali"]').val(data.tgl_kembali);
              $('[name="id_pegawai"]').val(data.id_pegawai);
            }
        });
        return false;
    });

    // //Simpan Barang
    // $('#btn_simpan').on('click',function(){
    //     $.ajax({
    //         type : "POST",
    //         url  : "<?php echo base_url('index.php/barang/create')?>",
    //         dataType : "JSON",
    //         data: $('#form').serialize(),
    //         success: function(data){
    //             $('#modal_add').modal('hide');
    //             tampil_data();
    //         }
    //     });
    //     return false;
    // });

        //Update Barang
    $('#btn_update').on('click',function(){
        $.ajax({
            type : "POST",
            url  : "<?php echo base_url('pinjam/update')?>" ,
            dataType : "JSON",
            data : $('#form_edit').serialize(),
            success: function(data){
                $('#modal_edit').modal('hide');
                tampil_data();
            }
        });
        return false;
    });



    //GET HAPUS
    $('#data_pinjam').on('click','.item_hapus',function(){
      if (confirm('Apa anda yakin ingin menghapus data ini')) {
        var id=$(this).attr('data');
        $.ajax({
          type : "POST",
          url  : "<?php echo base_url('pinjam/delete')?>/" + id,
          dataType : "JSON",
          success: function(data){
            tampil_data();
          }
        });
        return false;          
      }
    });

  } );    
</script>