<?php
session_start();
require_once "../includes/config.php";
if (isset($_SESSION["idAdmin"])) {
    $idUser = $_GET['id'];
    //TODO: get username
    $resultUser = $link->query("SELECT * from users where id=" . $idUser . "");
    $rowUser = mysqli_fetch_assoc($resultUser);
    //TODO: insert user to table deleteuser
    $link->query("INSERT INTO deleteuser (email) values ('" . $rowUser['email'] . "')");
    //TODO: update image for user
    $link->query("UPDATE photos SET status_photo = 2 where id_user = " . $rowUser['id'] . "");
    //TODO: update user->1 for delete
    $link->query("UPDATE users SET status_user = 1 where id = " . $rowUser['id'] . "");
    header("location:listUser.php");
} else {
    header("location:index.php");
}
