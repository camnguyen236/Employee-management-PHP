<?php
    include_once("E_phongBan.php");
    include_once("../config/Connection.php");
    class Model_phongBan{
        public function __construct() {}
        public function getAllDepartment() {
            $result = Connection::execute("SELECT * FROM phongban");
            $i = 0;
            $departmentList = array();
            while($row=mysqli_fetch_array($result)){
                $departmentList[$i++] = new Entity_phongBan($row['IDPB'],$row['Tenpb'],$row['Mota']);
            }
            return $departmentList;
        }
        public function getDepartmentDetail($id){
            $result = Connection::execute("SELECT * FROM phongban WHERE IDPB = '$id'");
            $row=mysqli_fetch_array($result);
            $department = new Entity_phongBan($row['IDPB'],$row['Tenpb'],$row['Mota']);
            return $department;
        }
        public function updateDepartment($idpb, $ten, $mota){
            return Connection::execute("UPDATE phongban SET Tenpb = '$ten', Mota = '$mota' WHERE IDPB = '$idpb'");
        }
        public function addDepartment($idpb, $ten, $mota){
            $result = Connection::execute("SELECT * FROM phongban WHERE IDPB = '$idpb'");
            if(mysqli_num_rows($result) > 0){
                return false;
            }
            else{
                return Connection::execute("INSERT INTO phongban VALUES ('$idpb','$ten','$mota')");
            }
        }
        public function searchDepartment($select, $value){
            $result = Connection::execute("SELECT * FROM phongban WHERE $select LIKE '%$value%'");
            $i = 0;
            $departmentList = array();
            while($row=mysqli_fetch_array($result)){
                $departmentList[$i++] = new Entity_phongBan($row['IDPB'],$row['Tenpb'],$row['Mota']);
            }
            return $departmentList;
        }
        public function deleteDepartment($id){
            $result = Connection::execute("DELETE FROM nhanvien WHERE IDPB = '$id'");
            if($result){
                return Connection::execute("DELETE FROM phongban WHERE IDPB = '$id'");
            }
            else{
                return false;
            }
        }
    }
?>