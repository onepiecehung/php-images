<?php
session_start();
require_once "../includes/config.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_SESSION["username"])) {
        $title_image = $_POST['title_image'];
        // TODO: for image upload
        $file = $_FILES['image']['name'];
        $file_loc = $_FILES['image']['tmp_name'];
        $folder = "../images/";
        //TODO:  The strtolower() function converts a string to lowercase
        $new_file_name = strtolower($file);
        //TODO:  The str_replace() function replaces some characters with some other characters in a string
        $final_file = str_replace(' ', '-', $new_file_name);
        // ? rename to type md5
        $final_file = md5($final_file.$_SESSION["username"]).'.jpg';
        if (move_uploaded_file($file_loc, $folder . $final_file)) {
            $image = $final_file;
        }
        echo $title_image;
        echo $image;
    } else {
        echo "Nothing here";
    }
}
