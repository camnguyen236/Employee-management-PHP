<?php 
    class Entity_nhanVien{
        public $idnv;
        public $ten;
        public $idpb;
        public $diachi;

        public function __construct($idnv, $ten, $idpb, $diachi){
            $this->idnv = $idnv;
            $this->ten = $ten;
            $this->idpb = $idpb;
            $this->diachi = $diachi;
        }
    }
?>