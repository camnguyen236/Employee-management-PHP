<?php 
    class Entity_phongBan{
        public $idpb;
        public $ten;
        public $mota;

        public function __construct($idpb, $ten, $mota){
            $this->idpb = $idpb;
            $this->ten = $ten;
            $this->mota = $mota;
        }
    }
?>