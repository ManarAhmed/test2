<?php

require_once './connection.php';

//print_r($_REQUEST);exit;
if (isset($_REQUEST['store']) || isset($_REQUEST['update'])) {
    $manufacturer = $_REQUEST['manufacturer'];
    $distributer = $_REQUEST['distribter'];
    $manu_part_num = $_REQUEST['manu_num'];
    $dist_part_num = $_REQUEST['dist_num'];
    $package = $_REQUEST['package'];
    $required_quantity = $_REQUEST['req_quantity'];
    $responsable_user = $_REQUEST['resp_user'];
    $project = $_REQUEST['project'];
    $priority = $_REQUEST['priority'];
    $due_date = $_REQUEST['due_date'];

    if (isset($_REQUEST['store'])) {
        $query = "INSERT INTO required(manufacturer, distributer, manu_part_num, dist_part_num, package, required_quantity, responsable_user, project, priority, due_date)"
                . " VALUES ('$manufacturer','$distributer','$manu_part_num','$dist_part_num','$package',$required_quantity,'$responsable_user','$project',$priority,'$due_date')";
    } elseif (isset($_REQUEST['update'])) {
        $id = $_REQUEST['id'];
        $query = "UPDATE required SET"
                . " manufacturer = $manufacturer, distributer = $distributer, manu_part_num = '$manu_part_num',"
                . " dist_part_num = '$dist_part_num', package = '$package', required_quantity = $required_quantity,"
                . "responsable_user = '$responsable_user', project = '$project', priority = $priority, "
                . "due_date = '$due_date' WHERE id =" . $id;
    }
} elseif (isset($_REQUEST["delete"])) {
    $id = $_REQUEST['id'];
    $query = "DELETE FROM required WHERE id = " . $id;
} else {
    print_r('proplem');
    exit;
}

if (mysqli_query($link, $query)) {
    if (isset($_REQUEST['store'])) {
        echo "New record created successfully";
    } elseif (isset($_REQUEST['update'])) {
        echo "Record updated successfully";
    } elseif (isset($_REQUEST['delete'])) {
        echo "Record deleted successfully";
    }
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($link);
}
mysqli_close($link);
