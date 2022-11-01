<?php 
require_once('../func/register.php');

if(isset($_POST["choice"])) {
    switch($_POST["choice"]) {
        case 'register':
            $var = new register();
            $email = trim($_POST['email']);
            $pass = password_hash(trim($_POST['password']), 
            PASSWORD_BCRYPT);
            echo $var->reqRegister($email, $pass, $_POST["fullname"]);
            break;
        
        default:
            echo "No Functions found";
            break;
    }
}
?>  