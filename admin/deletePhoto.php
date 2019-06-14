<?php
session_start();
require_once "../includes/config.php";
if (isset($_SESSION["idAdmin"])) {
    $id = $_GET['id'];
    if ($link->query("UPDATE photos SET status_photo = 2 where ")===TRUE) {
        echo '<script language="javascript">';
        echo 'alert("Delete successful.")';
        echo '</script>';
        echo '<script language="javascript">';
        echo 'window.location.href = "listUser.php"';
        echo '</script>';
    } else {
        # code...
    }
    
} else {
    header("location:index.php");
}
