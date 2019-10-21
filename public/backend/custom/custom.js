//custom js is needed to display required js in required position

$(document).ready(function () {
    setTimeout(function () {
        $('.alert').hide('slow');  //alert is a class in a div in messages.blade  //this js part is just to make the message disappear after 2 secs

    }, 2000);
});


$('#myDatepicker2').datetimepicker({
    format: 'YYYY/MM/DD'
});


//for contact textfield..to accept only numbers..
$('#numbersonly').bind('keyup blur', function () {
        let node = $(this);
        node.val(node.val().replace(/[^0-9 ]/g, ''));
    }
);

// to stop form submission before captcha box is checked
$(function () {
    $('#my-form').submit(function (event) {
        let verified = grecaptcha.getResponse();
        if (verified.length === 0) {
            event.preventDefault();
        }
    });
});

CKEDITOR.replace('details_id');

