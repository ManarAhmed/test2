<?php
require_once '../db/connection.php';
$query = 'select * from distributer where id =' . $_GET["id"];
$result = mysqli_query($link, $query);
$data = [];
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}
mysqli_close($link);
require_once '../layout/header.php';
?>

<div class="row">
    <div style="font-size: 22px; font-weight: bold; color: #d9534f;">Distributer: <?php echo $data[0]['name'] ?></div>
</div>
<div style="height: 30px;"></div>
<div class="table-responsive">
    <table class="table table-striped">

        <tr>
            <th class="text-left">ID</th>
            <td class="text-left"><?php echo $data[0]['id'] ?></td>
        </tr>
        <tr>
            <th class="text-left">Distributer</th>
            <td class="text-left"><?php echo $data[0]['name'] ?></td>
        </tr>
        <tr>
            <th class="text-left">Website</th>
            <td class="text-left"><?php echo $data[0]['website'] ?></td>
        </tr>
        <tr>
            <th class="text-left" colspan="3"></th>
        </tr>

    </table>
</div>
<a href="http://localhost/EwestStore/distributer.php" class="btn btn-info">Back to distributers</a>

<?php require_once '../layout/footer.php'; ?>