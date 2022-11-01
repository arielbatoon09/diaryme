$('#btn-register').click(function(){
    register();
});

const register =()=>{
    if ($('#fullname').val() != "" && $('#email').val() != "" &&
     $('#password').val() != "" && $('#confirmpassword').val() != ""){
        doRequest();
    } else{
        alert("Fill in empty field.");
    }
};

const doRequest =()=>{
    $.ajax({
        type: "POST",
        url: "../../server/router/login-router.php",
        data: {choice: 'register', fullname:$('#fullname').val(), email:$('#email').val(),
            password:$('#password').val()},
        success: function(data){
            alert(data);
        },
        error: function (thrownError){
            alert(thrownError);
        }
    });
};