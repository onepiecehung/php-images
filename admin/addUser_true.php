<?php
require_once "../includes/config.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $status_user = $_POST['status_user'];
    $point_user = $_POST['point_user'];
    $sql = 'INSERT INTO users (username, email, pass, status_user ,point_user) VALUES ("' . $username . '","' . $email . '","' . $password . '",' . $status_user . ',' . $point_user . ')';
    if ($link->query($sql) === TRUE) {
        echo '<script language="javascript">';
        echo 'alert("Add User successfully.\nAutomatically switch to list users.")';
        echo '</script>';
        echo '<script language="javascript">';
        echo 'window.location.href = "listUser.php"';
        echo '</script>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        echo '<script language="javascript">';
        echo 'alert("Add user unsuccessfully.\nAutomatically switch to list users.")';
        echo '</script>';
        echo '<script language="javascript">';
        echo 'window.location.href = "listUser.php"';
        echo '</script>';
    }
}
