<?php
    class Connection {
        public static function execute($query){
            $link = mysqli_connect("localhost","root","") or die ("Khong the ket noi den CSDL MySQL");
            mysqli_select_db($link,"DULIEU_1");
            return mysqli_query($link, $query);
        }
    }
?>