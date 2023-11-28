$(document).ready(function() {
    $('.btnDelete').on('click', function() {
        var id = $(this).data('id_delete');
        // Di sini Anda dapat menambahkan kode penghapusan data atau konfirmasi penghapusan.
        alert('Apakah Anda Yakin Akan Menghapus Data Rencana Panen?');
        $.ajax({
            url:"https://asia-south1.gcp.data.mongodb-api.com/app/application-0-rugju/endpoint/deleteInfoPanen?id=" + id,
            type: 'DELETE',
            success: function(data){
                window.location = '/infopanen/' + id;
            }
        })
    });

    $('.btnUpdate').on('click', function() {
        var id = $(this).data('id');
        // Di sini Anda dapat mengarahkan pengguna ke halaman edit dengan ID yang sesuai.
        window.location.href = '/EditDataPanen/' + id;
    });

    $('.btnDeleteBudidaya').on('click', function() {
        var id = $(this).data('id_delete');
        // Di sini Anda dapat menambahkan kode penghapusan data atau konfirmasi penghapusan.
        alert('Apakah Anda Yakin Akan Menghapus Data Rencana Panen?');
        $.ajax({
            url:"https://asia-south1.gcp.data.mongodb-api.com/app/application-0-rugju/endpoint/deleteBudidaya?id=" + id,
            type: 'DELETE',
            success: function(data){
                window.location = '/infobudidaya/' + id;
            }
        })
    });

    $('.btnUpdateBudidaya').on('click', function() {
        var id = $(this).data('id');
        // Di sini Anda dapat mengarahkan pengguna ke halaman edit dengan ID yang sesuai.
        window.location.href = '/EditDataBudidaya/' + id;
    });

    $('.btnTonton').on('click', function() {
        window.location.href = '/VideoBudidaya/';
    });

    $('.btnBaca').on('click', function() {
        window.location.href = '/ArtikelBudidaya/';
    });
});
