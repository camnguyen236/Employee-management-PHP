<?php
    include_once("E_nhanVien.php");
    include_once("../config/Connection.php");
    class Model_nhanVien{
        public function __construct() {}
        public function getAllStaff() {
            $result = Connection::execute("SELECT * FROM nhanvien");
            $i = 0;
            $staffList = array();
            while($row=mysqli_fetch_array($result)){
                $staffList[$i++] = new Entity_nhanVien($row['IDNV'],$row['Hoten'],$row['IDPB'],$row['Diachi']);
            }
            return $staffList;
        }
        public function getAllStaffByPB($idpb) {
            $result = Connection::execute("SELECT * FROM nhanvien WHERE IDPB = '$idpb'");
            $i = 0;
            $staffList = array();
            while($row=mysqli_fetch_array($result)){
                $staffList[$i++] = new Entity_nhanVien($row['IDNV'],$row['Hoten'],$row['IDPB'],$row['Diachi']);
            }
            return $staffList;
        }
        public function getStaffDetail($id){
            $result = Connection::execute("SELECT * FROM nhanvien WHERE IDNV = '$id'");
            $row=mysqli_fetch_array($result);
            $staff = new Entity_nhanVien($row['IDNV'],$row['Hoten'],$row['IDPB'],$row['Diachi']);
            return $staff;
        }
        public function updateStaff($idnv, $ten, $idpb, $diachi){
            return Connection::execute("UPDATE nhanvien SET Hoten = '$ten', IDPB = '$idpb', Diachi = '$diachi' WHERE IDNV = '$idnv'");
        }
        public function addStaff($idnv, $ten, $idpb, $diachi){
            $result = Connection::execute("SELECT * FROM nhanvien WHERE IDNV = '$idnv'");
            if(mysqli_num_rows($result) > 0){
                return false;
            }
            else{
                return Connection::execute("INSERT INTO nhanvien VALUES ('$idnv','$ten','$idpb','$diachi')");
            }
        }
        public function searchStaff($select, $value){
            $result = Connection::execute("SELECT * FROM nhanvien WHERE $select LIKE '%$value%'");
            $i = 0;
            $staffList = array();
            while($row=mysqli_fetch_array($result)){
                $staffList[$i++] = new Entity_nhanVien($row['IDNV'],$row['Hoten'],$row['IDPB'],$row['Diachi']);
            }
            return $staffList;
        }
        public function deleteStaff($id){
            return Connection::execute("DELETE FROM nhanvien WHERE IDNV = '$id'");
        }
    }
?>