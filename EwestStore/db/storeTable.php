<?php

require_once './connection.php';

//print_r($_REQUEST);exit;
if (isset($_REQUEST['submit_stored']) || isset($_REQUEST['update_stored'])) {
    $manufacturer = $_REQUEST['manufacturer'];
    $distributer = $_REQUEST['distribter'];
    $manu_part_num = $_REQUEST['manu_num'];
    $dist_part_num = $_REQUEST['dist_num'];
    $package = $_REQUEST['package'];
    $quantity = $_REQUEST['quantity'];
    $drawer_num = $_REQUEST['drawer_num'];

    if (isset($_REQUEST['submit_stored'])) {
        $query = "INSERT INTO store(manu_id, dist_id, manu_part_num, dist_part_num, package, quantity, drawer_num)"
                . " VALUES ('$manufacturer','$distributer','$manu_part_num','$dist_part_num','$package',$quantity,$drawer_num)";
    } elseif (isset($_REQUEST['update_stored'])) {
        $id = $_REQUEST['id'];
        $query = "UPDATE store SET"
                . " manu_id = $manufacturer, dist_id = $distributer, manu_part_num = '$manu_part_num',"
                . " dist_part_num = '$dist_part_num', package = '$package', quantity = $quantity,"
                . " drawer_num = $drawer_num WHERE id = $id";
    }
} elseif (isset($_REQUEST["delete"])) {
    $id = $_REQUEST['id'];
    $query = "DELETE FROM store WHERE id = $id";
} else {
    print_r('proplem');
    exit;
}

if (mysqli_query($link, $query)) {
    if (isset($_REQUEST['store_stored'])) {
        echo "New record created successfully";
    } elseif (isset($_REQUEST['update_stored'])) {
        echo "Record updated successfully";
    } elseif (isset($_REQUEST['delete'])) {
        echo "Record deleted successfully";
    }
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($link);
}
mysqli_close($link);
