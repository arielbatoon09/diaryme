<?php 
require('../config/database.php');

class register
{
    public function reqRegister($email,$pass,$fullname){
        return $this->registerNow($email,$pass,$fullname);
    }
    private function registerNow($email, $pass, $fullname){
        try{
            $db = new database("localhost","root","","diaryme");
            if($db->status()){
                $conn = $db->conn();
                $checkEmail = $conn->prepare("SELECT email FROM user WHERE email = ?");
                $checkEmail->execute([$email]);
                if($checkEmail->rowCount() > 0){
                    return "501: This email is already taken.";
                }else{
                    $stmt = $db->conn()->prepare($this->insertQuery());
                    $stmt->execute(array($email,$pass,$fullname,$this->getDate(),$this->getDate()));
                    return "201: Your account has been created successfully.";
                }
            }else{
                return "501: Error Connecting Database.";
            }
        } catch(PDOException $th){  
            echo $th;
        }
    }

    private function insertQuery(){
        return "INSERT INTO `user`(`email`, `password`, `full_name`, `created`, `updated`) 
        VALUES (?,?,?,?,?)";
    }

    private function getDate(){
        return date("Y/m/d");
    }
}
?>