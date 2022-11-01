<?php 
    class database{
        private $db_host;
        private $db_user;
        private $db_pass;
        private $dbms;
        private $status;
        private $con;
        
        function __construct($db_host, $db_user, $db_pass, $dbms)
        {
            $this->db_host = $db_host;
            $this->db_user = $db_user;
            $this->db_pass = $db_pass;
            $this->dbms = $dbms;
            $this->status = false;
            $this->con = $this->init();
        }

        private function init(){
            try{
                $con = new PDO("mysql:host=$this->db_host;dbname=".$this->dbms,
                $this->db_user,$this->db_pass);
                $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $this->status = true;
                return $con;
            }catch(PDOException $th) {
                // Error
            }
        }

        public function conn(){
            return $this->con;
        }

        public function status(){
            return $this->status;
        }
    }
?>