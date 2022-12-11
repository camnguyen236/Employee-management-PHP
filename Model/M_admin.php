<?php
    include_once("E_admin.php");
    include_once("../config/Connection.php");
    class Model_admin{
        public function __construct() {}
        public function getAdmin($username, $password){
            $result = Connection::execute("SELECT * FROM admin WHERE Username = '$username' AND Password = '$password'");
            $row=mysqli_fetch_array($result);
            $admin = new Entity_admin($row['Id'],$row['Username'],$row['Password']);
            return $admin;
        }
        public function checkLogin($username, $password) {
            $result = Connection::execute("SELECT * FROM admin WHERE Username = '$username' AND Password = '$password'");
            $row=mysqli_fetch_array($result);
            if(mysqli_num_rows($result) == 1){
                session_start();
                $_SESSION['user'] = $row['Id'];
                return true;
            }
            else{
                return false;
            }
        }
    }
?>