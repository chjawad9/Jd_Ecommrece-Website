$(document).ready(function (e) {
     $("#registerform").submit(function (event) {
     let $password = $("#password");
     let $confirm = $("#Con_password");
     let $error = $("#confirm_error");
     if($password.val() == $confirm.val()){
         return true;
     }else{
         $error.text("Password not Match").css({ 'color':'red' });
         event.preventDefault();
     }
 });
 
 });
 

$('#btnn').click(function(){

    var username=$("#name").val();
    var email=$("#email").val();
    var passs=$("#password").val();
    var con_pass=$("#Con_password").val();



    if(username=="" && email=="" && passs=="" && con_pass=="")
    {
        alert('All Feild is Required');
    }
    else if(username=="")
    {
        alert('UserName is Required');
    }
    else if(email=="")
    {
        alert('Email is Required');
    }
    else if(passs=="")
    {
        alert('Password is Required');
    }
    else if(con_pass=="")
    {
        alert('Confurim Password is Required');
    }

});
$('#FormDa').click(function(){

    var name=$("#name").val();
    var email=$("#email").val();
    var CompanyName=$("#Company").val();
    var phoneNumber=$("#phone").val();
    var message=$("#message").val();



    if(name=="" && email=="" && CompanyName=="" && phoneNumber=="" && message=="")
    {
        alert('All Feild is Required');
    }
    else if(name=="")
    {
        alert('Name is Required');
    }
    else if(email=="")
    {
        alert('Email is Required');
    }
    else if(CompanyName=="")
    {
        alert('Company Name is Required');
    }
    else if(phoneNumber=="")
    {
        alert('phone Number is Required');
    }
    else if(message=="")
    {
        alert('message is Required');
    }

});





// profile
// 

// $(document).ready(function (e) {


//     let $uploadfile = $('#register .upload-profile-image input[type="file"]');
//     $uploadfile.change(function () {
//      readURL(this);
//     });
    
 
//  });
//  function readURL(input) {
//     if(input.files && input.files[0]){
//         let reader = new FileReader();
//         reader.onload = function (e) {
//             $("#register .upload-profile-image .img").attr('src', e.target.result);
//             $("#register .upload-profile-image .camera-icon").css({display: "none"});
//         }

//         reader.readAsDataURL(input.files[0]);

//     }
// }
