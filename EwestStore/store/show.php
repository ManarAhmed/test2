<?php
require_once '../db/connection.php';
$query ="select s.id,m.name as manufacturer, d.name as distributer, s.manu_part_num, "
        . "s.dist_part_num, s.package, s.quantity, s.drawer_num from store s, manufacturer m, "
        . "distributer d where d.id = s.dist_id and m.id = s.manu_id and s.id = ".$_GET["id"];

$result = mysqli_query($link, $query);
$data = [];
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}

mysqli_close($link);
require_once '../layout/header.php';
?>

<div class="row">
    <div style="font-size: 22px; font-weight: bold; color: #d9534f;">Store: <?php echo $data[0]['manu_part_num'] ?></div>
</div>
<div style="height: 30px;"></div>
<div class="table-responsive">
    <table class="table table-striped">

        <tr>
            <th class="text-left">ID</th>
            <td class="text-left"><?php echo $data[0]['id'] ?></td>
        </tr>
        <tr>
            <th class="text-left">Manufacturer</th>
            <td class="text-left"><?php echo $data[0]['manufacturer'] ?></td>
        </tr>
        <tr>
            <th class="text-left">Distributer</th>
            <td class="text-left"><?php echo $data[0]['distributer'] ?></td>
        </tr>
        <tr>
            <th class="text-left">Manufacturer Part-num</th>
            <td class="text-left"><?php echo $data[0]['manu_part_num'] ?></td>
        </tr>
        <tr>
            <th class="text-left">Distributer Part-num</th>
            <td class="text-left"><?php echo $data[0]['dist_part_num'] ?></td>
        </tr>
        <tr>
            <th class="text-left">Package</th>
            <td class="text-left"><?php echo $data[0]['package'] ?></td>
        </tr>
        <tr>
            <th class="text-left">Quantity</th>
            <td class="text-left"><?php echo $data[0]['quantity'] ?></td>
        </tr>
        <tr>
            <th class="text-left">Drawer Number</th>
            <td class="text-left"><?php echo $data[0]['drawer_num'] ?></td>
        </tr>
       </table>
</div>
<a href="http://localhost/EwestStore/store.php" class="btn btn-info">Back to store</a>

<?php require_once '../layout/footer.php'; ?>