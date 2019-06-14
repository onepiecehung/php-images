<?php
session_start();
require_once "../includes/config.php";
$id = $_GET['id'];
if (isset($_SESSION["idAdmin"])) {
    //TODO: get email user
    $resultEmail = $link->query("SELECT * from deleteuser where id = " . $id . "");
    $rowEmail=mysqli_fetch_assoc($resultEmail);
    //TODO: get username
    $resultUser=$link->query();
} else {
    header("location:index.php");
}
