<?php
session_start();
if (isset($_SESSION["idAdmin"])) {
    unset($_SESSION["idAdmin"]);
    unset($_SESSION["usernameAdmin"]);
    //session_destroy();
    header("location:index.php");
} else {
    header("location:index.php");
}
