<?php
session_start();
require_once "../includes/config.php";
if (isset($_SESSION["idAdmin"])) {
    $id = $_GET['id'];
    if ($link->query("UPDATE photos SET status_photo = 0 where id = " . $id . "") === TRUE) {
        echo '<script language="javascript">';
        echo 'alert("Restore successful.")';
        echo '</script>';
        echo '<script language="javascript">';
        echo 'window.location.href = "listImagesDeleted.php"';
        echo '</script>';
    } else {
        # code...
    }
} else {
    header("location:index.php");
}
