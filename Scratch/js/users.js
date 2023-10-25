$(document).on ('click',  '.delete-user', function(){
    var id = $(this).data('id');
    $('delete-users').removeClass('hide');
    $(this).addClass('hide');
    $('.delete-options').addClass('hide');
    $('#options'+id).removeClass('hide');

});