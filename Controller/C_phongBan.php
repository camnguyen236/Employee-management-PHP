<!-- <!Doctype html> -->
<?php 
    include_once("../Model/M_phongBan.php");
    class C_Department{
        public function invoke() {
            if(isset($_GET['action'])){
                if($_GET['action'] == 'update'){
                    $this->updateDepartment();
                }
                if($_GET['action'] == 'add'){
                    $this->addDepartment();
                }
                if($_GET['action'] == 'search'){
                    $this->searchDepartment();
                }
                if($_GET['action'] == 'delete'){
                    $this->deleteDepartment();
                }
                if($_GET['action'] == 'deleteMany'){
                    $this->deleteManyDepartment();
                }
            }
            else {
                $this->showDepartment();
            }
        }
        public function isLogin(){
            session_start();
            if(!isset($_SESSION['user'])) {
                header("Location: ../View/login.php");
                exit;
            }      
        }
        public function showDepartment(){
            if(isset($_GET['IDPB'])){
                $modelDepartment = new Model_phongBan();
                $department = $modelDepartment->getStudentDetail($_GET['IDPB']);
                include_once("../View/StudentDetail.php");
            }                           
            else {
                $modelDepartment = new Model_phongBan();
                $departmentList = $modelDepartment->getAllDepartment();
                include_once("../View/phongBan/XemthongtinPB.php");
            }
        }
        public function updateDepartment(){
            $this->isLogin();
            $modelDepartment = new Model_phongBan();
            if (isset($_GET['IDPB'])){
                if(isset($_POST['tenPB']) && isset($_POST['Mota'])){
                    $result = $modelDepartment->updateDepartment($_GET['IDPB'],$_POST['tenPB'],$_POST['Mota']);
                    if($result){
                        // echo "Update successfully";
                        $departmentList = $modelDepartment->getAllDepartment();
                        include_once("../View/phongBan/Capnhat.php");
                    }
                    else{
                        echo "Update fail";
                    }
                }
                else{
                    $department = $modelDepartment->getDepartmentDetail($_GET['IDPB']);
                    include_once("../View/phongBan/form-capnhat.php");
                }
            }
            else {
                $departmentList = $modelDepartment->getAllDepartment();
                include_once("../View/phongBan/Capnhat.php");
            }            
        }
        public function addDepartment(){
            $this->isLogin();
            $modelDepartment = new Model_phongBan();
            if(isset($_POST['IDPB']) && isset($_POST['tenpb']) && isset($_POST['mota'])){
                $result = $modelDepartment->addDepartment($_POST['IDPB'],$_POST['tenpb'],$_POST['mota']);
                if($result){
                    // echo "Add successfully";
                    $departmentList = $modelDepartment->getAllDepartment();
                    include_once("../View/phongBan/XemthongtinPB.php");
                }
                else{
                    echo "Add fail";
                }
            }
            else{
                include_once("../View/phongBan/chenPB.php");
            }
        }
        public function searchDepartment(){
            $modelDepartment = new Model_phongBan();
            if(isset($_POST['value']) && isset($_POST['select'])){
                $departmentList = $modelDepartment->searchDepartment($_POST['select'],$_POST['value']);
                include_once("../View/phongBan/XemthongtinPB.php");
            }
            else{
                include_once("../View/phongBan/Timkiem.php");
            }
        }
        public function deleteDepartment(){
            $this->isLogin();
            $modelDepartment = new Model_phongBan();
            if(isset($_GET['IDPB'])){
                $result = $modelDepartment->deleteDepartment($_GET['IDPB']);
                if($result){
                    // echo "Delete successfully";
                    $departmentList = $modelDepartment->getAllDepartment();
                    include_once("../View/phongBan/Xoa.php");
                }
                else{
                    echo "Delete fail";
                }
            }
            else{
                $departmentList = $modelDepartment->getAllDepartment();
                include_once("../View/phongBan/Xoa.php");
            }
        }
        public function deleteManyDepartment(){
            $this->isLogin();
            $modelDepartment = new Model_phongBan();
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $departmentList = $modelDepartment->getAllDepartment();
                foreach($departmentList as $department){
                    if(isset($_POST[$department->idpb])){
                        $result = $modelDepartment->deleteDepartment($department->idpb);
                        if(!$result){
                            echo "Delete fail";
                            break;
                        }
                    }
                }
            }
            $departmentList = $modelDepartment->getAllDepartment();
            include_once("../View/phongBan/Xoatatca.php");
        }
    }
    $C_department = new C_Department();
    $C_department->invoke();
?>