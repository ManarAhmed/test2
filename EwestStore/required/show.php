<?php
header('Access_Control_Allow_Origin: *');
require_once dirname(__FILE__) . '/db/config.php';

//connect to database
$link = @mysqli_connect(
                $config['server'], $config['username'], $config['password'], $config['database']
);
if (!$link) {
    die('Error: ' . mysqli_connect_error());
}

$query = "select * from required";
$result = mysqli_query($link, $query);
$data = [];
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}
mysqli_close($link);
?>