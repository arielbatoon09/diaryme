<?php 
require_once('../func/login.php');

if(isset($_POST["choice"])) {
    switch($_POST["choice"]) {
        case 'login':
            $var = new login();
            $email = trim($_POST['email']);
            $pass = trim($_POST['password']);
            echo $var->loginNow($email, $pass);
            break;
        default:
            echo "No Functions found";
            break;
    }
}
?>