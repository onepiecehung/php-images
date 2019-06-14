<?php
session_start();
if (isset($_SESSION["idAdmin"])) {
    header("location:home.php");
} else {
    header("location:login.php");
}