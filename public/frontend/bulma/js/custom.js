$(document).ready(function () {
    $('#add-data').click(function (e) {
        e.preventDefault();
        let subject=$('#subject').val();
        let details=$('#details').val();
        let name=$('#name').val();
        let email=$('#email').val();
        let phone=$('#phone').val();
        let upload=$('#upload').val();
        $.ajax({

            method:'POST',
            url:'http://dev.sarathi.com/complain',
            data:{subject:subject,details:details,name:name,email:email,phone:phone,upload:upload},
            success:function (response) {
                $('#my-form')[0].reset();
                swal({
                    title: "Good job!",
                    text: "response",
                    icon: "success",
                    button: false,
                    timer:2000
                });
            }
        })
    });
    $('#search').keyup(function(){
       let getData=$(this).val();
        $.ajax({

            method:'GET',
            url:'search.php?criteria=' + getData,
            success: function (response) {
               // console.log(response);
              $('tbody').html(response);
           }
    });
  
   });

});