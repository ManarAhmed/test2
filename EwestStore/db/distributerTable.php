<?php

require_once './connection.php';

//print_r($_REQUEST);exit;
if (isset($_REQUEST['submit_dist']) || isset($_REQUEST['update_dist'])) {
    $name = $_REQUEST['distributer'];
    $website = $_REQUEST['dist_website'];
   
    if (isset($_REQUEST['submit_dist'])) {
        $query = "INSERT INTO distributer(name, website) VALUES ('$name','$website')";
    } elseif (isset($_REQUEST['update_dist'])) {
        $id = $_REQUEST['id'];
        $query = "UPDATE distributer SET name = '$name', website = '$website' WHERE id = $id";
    }
} elseif (isset($_REQUEST["delete"])) {
    $id = $_REQUEST['id'];
    $query = "DELETE FROM distributer WHERE id = $id";
} else {
    print_r('proplem');
    exit;
}

if (mysqli_query($link, $query)) {
    if (isset($_REQUEST['submit_dist'])) {
        echo "New record created successfully";
    } elseif (isset($_REQUEST['update_dist'])) {
        echo "Record updated successfully";
    } elseif (isset($_REQUEST['delete'])) {
        echo "Record deleted successfully";
    }
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($link);
}
mysqli_close($link);
