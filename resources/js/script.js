$(document).ready(function(){
    $('#btndelete').on('click', function(){
        var id = $(this).data('id');
        $.ajax({
            url:"https://asia-south1.gcp.data.mongodb-api.com/app/application-0-rugju/endpoint/deleteInfoPanen?id=" + id,
            type: 'DELETE',
            success: function(data){
                window.location = '../html/tables-basic.php'
            }
        })
    })

    $('#btnupdate').on('click', function(){
        var id = $(this).data('id');
        window.location.href = 'form-layouts-vertical.php?id=' + id;
    })
})