<?php
// Include config file
require_once "../includes/config.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['pass'];
    //query
    $sql_user = 'SELECT *
    FROM users
    WHERE name = "' . $username . '"';
    $sql_email = 'SELECT *
    FROM users
    WHERE email = "' . $email . '"';
    $sql2 = "INSERT INTO users (name,email, password) VALUES ('" . $username . "','" . $email . "','" . $password . "');";
    //excuet
    //echo ($sql);
    $result_user = $link->query($sql_user);
    $result_email = $link->query($sql_email);
    //echo ($result);
    if (mysqli_num_rows($result_user) > 0) {
        echo '<script language="javascript">';
        echo 'alert("This username is already taken.\nYou will be return register.\nThank you!")';
        echo '</script>';
        echo '<script language="javascript">';
        echo 'window.location.href = "../register/"';
        echo '</script>';
        //header("location: ../login/");
    } elseif (mysqli_num_rows($result_email) > 0) {
        echo '<script language="javascript">';
        echo 'alert("This email is already taken.\nYou will be return register.\nThank you!")';
        echo '</script>';
        echo '<script language="javascript">';
        echo 'window.location.href = "../register/"';
        echo '</script>';
    } else {
        $sql2 = "INSERT INTO users (name,email, password) VALUES ('" . $username . "','" . $email . "','" . $password . "');";
        mysqli_query($link, $sql2);
        echo '<script language="javascript">';
        echo 'alert("Sign up successfully.\nLogin now.\nAutomatically switch to login.")';
        echo '</script>';
        echo '<script language="javascript">';
        echo 'window.location.href = "../login/"';
        echo '</script>';
    }
    //     echo ($sql);
    //     echo ($sql2);
    //     echo ($result);
    // } else {
    //     echo '<script language="javascript">';
    //     echo 'alert("Oops! Something went wrong, Return Register.")';
    //     echo '</script>';
    //     header("location: index.html");
}
mysqli_close($link);
