<?php
header('Access_Control_Allow_Origin: *');
require_once dirname(__FILE__).'/config.php';

//connect to database
$link = @mysqli_connect(
        $config['server'],
        $config['username'],
        $config['password'],
        $config['database']
        );
if(!$link){
    die('Error: ' . mysqli_connect_error());
}

$manufacturer = $_POST['manufacturer'];
$distributer = $_POST['distribter'];
$manu_part_num = $_POST['manu_num'];
$dist_part_num = $_POST['dist_num'];
$package = $_POST['package'];
$required_quantity = $_POST['req_quantity'];
$responsable_user = $_POST['resp_user'];
$project = $_POST['project'];
$priority = $_POST['priority'];
$due_date = $_POST['due_date'];

$query = "insert into required(manufacturer, distributer, manu_part_num, dist_part_num, package, required_quantity, responsable_user, project, priority, due_date)"
        . " values ('$manufacturer','$distributer','$manu_part_num','$dist_part_num','$package',$required_quantity,'$responsable_user','$project',$priority,'$due_date')";


if (mysqli_query($link, $query)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($link);
}

mysqli_close($link);



//if(isset($_POST['submit'])){
//    echo 'server success';
//}  else {
//    echo 'server error';    
//}