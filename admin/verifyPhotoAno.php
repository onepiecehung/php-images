<?php
session_start();
require_once "../includes/config.php";
if (isset($_SESSION["idAdmin"])) {
    $id = $_GET['id'];
    if ($link->query("UPDATE photos_any SET status_photo = 1 where id = " . $id . "") === TRUE) {
        echo '<script language="javascript">';
        echo 'alert("Verify successful.")';
        echo '</script>';
        echo '<script language="javascript">';
        echo 'window.location.href = "listImagesNotVerifyAno.php"';
        echo '</script>';
    } else {
        # code...
    }
} else {
    header("location:index.php");
}
