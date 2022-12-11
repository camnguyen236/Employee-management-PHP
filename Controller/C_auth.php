<?php 
    include_once("../Model/M_admin.php");
    class C_Auth{
        public function invoke(){
            if(isset($_GET['action'])){
                if($_GET['action'] == 'logout'){
                    $this->logout();
                }
                else{
                    $this->login();
                }
            }
        }
        public function login(){
            if(isset($_POST['username']) && isset($_POST['password'])){
                $modelAdmin = new Model_admin();
                if($modelAdmin->checkLogin($_POST['username'], $_POST['password'])){
                    header("Location: ../View/main.php");
                }
                else{
                    echo "Login fail";
                }
            }                           
            else {
                include("../View/login.php");
            }
        } 
        public function logout(){
            session_start();
            session_destroy();
            header("Location: ../View/login.php");
        }       
    }
    
    $C_auth = new C_Auth();
    $C_auth->invoke();
?>