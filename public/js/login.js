$('#btn-login').click(function(){
    doRequest();
});

const doRequest =()=>{
    $.ajax({
        type: "POST",
        url: "../../server/router/login-router.php",
        data: {choice: 'login', email: $('#email').val(), password: $('#password').val()},
        dataType: 'JSON',
        success: function(data){
            if(data.status == 'success'){
                window.location = "../pages/dashboard.php";
            }else if(data.status == 'passwordError'){
                $(".password").addClass("is-invalid");
                $(".email").removeClass("is-invalid");
            }else if(data.status == 'emailError'){
                $(".password").removeClass("is-invalid");
                $(".email").addClass("is-invalid");
            }
        },
        error: function (thrownError){
            alert(thrownError);
        }
    });
};