<?php 
require('../config/database.php');
    class login
    {
        public function loginNow($email, $password){
            return $this->checkIfValid($email, $password);
        }
        private function checkIfValid($email, $pass){
            try{
                $db = new database("localhost","root","","diaryme");
                if($db->status()){
                    $conn = $db->conn();
                    $query = $conn->prepare("SELECT * FROM user WHERE email = ?");
                    $query->execute([$email]);
                    if($query->rowCount() > 0){
                        $row = $query->fetch(PDO::FETCH_OBJ);
                        $thisPassword = $row->password;
                        if(password_verify($pass, $thisPassword)){
                            return json_encode(['status' => 'success']);
                        } else{
                            return json_encode(['status' => 'passwordError', 
                            'message' => 'Password is Invalid']);
                        }
                    }else{
                        return json_encode(['status' => 'emailError', 
                            'message' => 'E-mail is Invalid']);
                    }

                }else{
                    return "501: Error Connecting Database.";
                }
            }catch(PDOException $th){
                return $th->getMessage();
            }


        }
    }
?>