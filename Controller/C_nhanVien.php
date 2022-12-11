<!-- <!Doctype html> -->
<?php 
    include_once("../Model/M_nhanVien.php");
    include_once("../Model/M_phongBan.php");
    class C_NhanVien{
        public function invoke() {
            if(isset($_GET['action'])){
                if($_GET['action'] == 'update'){
                    $this->updateStaff();
                }
                if($_GET['action'] == 'add'){
                    $this->addStaff();
                }
                if($_GET['action'] == 'search'){
                    $this->searchStaff();
                }
                if($_GET['action'] == 'delete'){
                    $this->deleteStaff();
                }
                if($_GET['action'] == 'deleteMany'){
                    $this->deleteManyStaff();
                }
            }
            else {
                $this->showStaff();
            }
        }
        public function showStaff(){
            if(isset($_GET['IDPB'])){
                $modelStaff = new Model_nhanVien();
                $staffList = $modelStaff->getAllStaffByPB($_GET['IDPB']);
                include_once("../View/nhanVien/XemthongtinNVPB.php");
            }                           
            else {
                $modelStaff = new Model_nhanVien();
                $staffList = $modelStaff->getAllStaff();
                include_once("../View/nhanVien/XemthongtinNV.php");
            }
        }
        public function isLogin(){
            session_start();
            if(!isset($_SESSION['user'])) {
                header("Location: ../View/login.php");
                exit;
            }      
        }
        public function updateStaff(){
            $this->isLogin();
            $modelStaff = new Model_nhanVien();
            if (isset($_GET['IDNV'])){
                if(isset($_POST['tenNV']) && isset($_POST['PB']) && isset($_POST['Diachi'])){
                    $result = $modelStaff->updateStaff($_GET['IDNV'],$_POST['tenNV'],$_POST['PB'],$_POST['Diachi']);
                    if($result){
                        // echo "Update successfully";
                        $staffList = $modelStaff->getAllStaff();
                        include_once("../View/nhanVien/Capnhat.php");
                    }
                    else{
                        echo "Update fail";
                    }
                }
                else{
                    $modelDepartment = new Model_phongBan();
                    $departmentList = $modelDepartment->getAllDepartment();
                    $staff = $modelStaff->getStaffDetail($_GET['IDNV']);
                    include_once("../View/nhanVien/form-capnhat.php");
                }
            }
            else {
                $staffList = $modelStaff->getAllStaff();
                include_once("../View/nhanVien/Capnhat.php");
            }    
        }
        public function addStaff(){
            $this->isLogin();
            $modelStaff = new Model_nhanVien();
            if(isset($_POST['IDNV']) && isset($_POST['Hoten']) && isset($_POST['PB']) && isset($_POST['Diachi'])){
                $result = $modelStaff->addStaff($_POST['IDNV'],$_POST['Hoten'],$_POST['PB'],$_POST['Diachi']);
                if($result){
                    // echo "Add successfully";
                    $staffList = $modelStaff->getAllStaff();
                    include_once("../View/nhanVien/XemthongtinNV.php");
                }
                else{
                    echo "Add fail";
                }
            }
            else{                
                $modelDepartment = new Model_phongBan();
                $departmentList = $modelDepartment->getAllDepartment();
                include_once("../View/nhanVien/chenNV.php");
            }
        }
        public function searchStaff(){
            $modelStaff = new Model_nhanVien();
            if(isset($_POST['value']) && isset($_POST['select'])){
                $staffList = $modelStaff->searchStaff($_POST['select'],$_POST['value']);
                include_once("../View/nhanVien/XemthongtinNV.php");
            }
            else{
                include_once("../View/nhanVien/Timkiem.php");
            }
        }
        public function deleteStaff(){
            $this->isLogin();
            $modelStaff = new Model_nhanVien();
            if(isset($_GET['IDNV'])){
                $result = $modelStaff->deleteStaff($_GET['IDNV']);
                if($result){
                    // echo "Delete successfully";
                    $staffList = $modelStaff->getAllStaff();
                    include_once("../View/nhanVien/Xoa.php");
                }
                else{
                    echo "Delete fail";
                }
            }
            else{
                $staffList = $modelStaff->getAllStaff();
                include_once("../View/nhanVien/Xoa.php");
            }
        }
        public function deleteManyStaff(){
            $this->isLogin();
            $modelStaff = new Model_nhanVien();
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $staffList = $modelStaff->getAllStaff();
                foreach($staffList as $staff){
                    if(isset($_POST[$staff->idnv])){
                        $result = $modelStaff->deleteStaff($staff->idnv);
                        if(!$result){
                            echo "Delete fail";
                            break;
                        }
                    }
                }
            }
            $staffList = $modelStaff->getAllStaff();
            include_once("../View/nhanVien/Xoatatca.php");
        }
    }
    $C_nhanVien = new C_NhanVien();
    $C_nhanVien->invoke();
?>