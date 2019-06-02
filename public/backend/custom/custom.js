$(document).ready(function () {
    setTimeout(function () {
        $('.alert').hide('slow');

    },3000);

    $('#myDatepicker2').datetimepicker({
        format: 'YYYY.MM.DD'
    });

    CKEDITOR.replace('details_id');
    // CKEDITOR.replace('comments');

});