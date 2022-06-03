<?php
    require_once "Database.php";
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $db = new Database();
        $uname = $db->getDataDetail($id);
        $hasil = $db->delData($id);
        if($hasil){
            if($uname!=""){
                unlink("username".$uname);
            }
            header("location:view_data.php");
        }
        else{
             ("Gagal menghapus....");
        };
    }
    else{
        ("Akses Gagal...");
    }
?>