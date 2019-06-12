$(document).ready(function () {
    setTimeout(function () {
        $('.alert').hide('slow');

    },2000);

    $('#myDatepicker2').datetimepicker({
        format: 'YYYY.MM.DD'
    });

    CKEDITOR.replace('details_id');
    // CKEDITOR.replace('comments');

});