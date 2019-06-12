$(document).ready(function () {
    $('#my-form')[0].reset();
    swal({
        title: "Complain has been submitted successfully!",
        text: "Response",
        icon: "success",
        button: false,
        timer:3000
    });
});


// $(document).ready(function () {
//     $('#add-data').click(function () {
//         let subject=$('#subject').val();
//         let details=$('#details').val();
//         let name=$('#name').val();
//         let email=$('#email').val();
//         let phone=$('#phone').val();
//         let upload=$('#upload').val();
//         $.ajax({
//
//             method:'POST',
//             url: "<?php echo url('/@add-complain') ?>",
//             data:{subject:subject, details:details, name:name, email:email,phone:phone,upload:upload},
//             success:function (response) {
//                 $('#my-form')[0].reset();
//                 swal({
//                     title: "Good job!",
//                     text: "response",
//                     icon: "success",
//                     button: false,
//                     timer:2000
//                 });
//             }
//         })
//     });
//
// });