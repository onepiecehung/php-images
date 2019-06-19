<?php
    require_once "includes/config.php";
    $sql = "UPDATE photos SET status_photo = ".'2'." WHERE id_user = 9";
    echo $sql;
    if ($link->query($sql) === TRUE) {
        echo "Record updated successfully\n";
    } else {
        echo "Error updating record: " . $i."\n";
    }
    // for ($i=1; $i < 49; $i++) { 
    //     if ($i%2==0) {
    //         $sql = "UPDATE photos SET status_photo = ".'0'." WHERE id = ".$i."";
    //         echo $sql;
    //         if ($link->query($sql) === TRUE) {
    //             echo "Record updated successfully\n";
    //         } else {
    //             echo "Error updating record: " . $i."\n";
    //         }
    //     }
    // }
