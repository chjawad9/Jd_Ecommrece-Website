
var loginform = document.getElementById("loginform");
    var registerform = document.getElementById("registerform");
    var indecator = document.getElementById("indecator");



    function register() {
        registerform.style.transform = "translateX(50px)";
        loginform.style.transform = "translateX(50px)";
        indecator.style.transform = "translateX(50px)";
    }
    function login() {
        registerform.style.transform = "translateX(350px)";
        loginform.style.transform = "translateX(350px)";
        indecator.style.transform = "translateX(0px)";
    }
// validation


var email = document.forms['form']['user-name'];
var password = document.forms['form']['user-pass'];
var email_error = document.getElementById('email_error');
var password_error = document.getElementById('password_error');

$('#btn1').click(function () {
    
    var b = $('#namee').val();
    var c = $('#passs').val();
    if (b == "") 
    {
        $('#namee').css({ 'border':' 2px solid red' });
    }
    if (c == "") 
    {
        $('#passs').css({ 'border':' 2px solid red' });
    }



});



// 

$(document).ready(function (e) {


    let $uploadfile = $('#register .upload-profile-image input[type="file"]');
    $uploadfile.change(function () {
     readURL(this);
    });
       
     $("#registerform").submit(function (event) {
     let $password = $("#password");
     let $confirm = $("#Con_password");
     let $error = $("#confirm_error");
     if($password.val() == $confirm.val()){
         return true;
     }else{
         $error.text("Password not Match");
         event.preventDefault();
     }
 });
 
 });
 function readURL(input) {
    if(input.files && input.files[0]){
        let reader = new FileReader();
        reader.onload = function (e) {
            $("#register .upload-profile-image .img").attr('src', e.target.result);
            $("#register .upload-profile-image .camera-icon").css({display: "none"});
        }

        reader.readAsDataURL(input.files[0]);

    }
}

 


