<?php
require_once './db/connection.php';
$query = "select * from store";
$result = mysqli_query($link, $query);
$data = [];
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}
mysqli_close($link);
require_once './layout/header.php';
?> 

<div class="row">
    <div class="col-sm-offset-4 col-sm-4 text-center" style="font-size: 22px; font-weight: bold; color: #d9534f;">Store</div>
</div>
<div style="height: 30px;"></div>
<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th class="text-center">ID</th>
                <th class="text-center">Manufacturer Part-num</th>
                <th class="text-center">Package</th>
                <th class="text-center">Quantity</th>
                <th class="text-center">Drawer number</th>
                <th class="text-center" colspan="5"></th>

            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($data as $key => $value) {
                echo'<tr>';
                echo '<td class="text-center" >' . $value['id'] . '</td>';
                echo '<td class="text-center" >' . $value['manu_part_num'] . '</td>';
                echo '<td class="text-center" >' . $value['package'] . '</td>';
                echo '<td class="text-center" >' . $value['quantity'] . '</td>';
                echo '<td class="text-center" >' . $value['drawer_num'] . '</td>';
                    
                echo '<td class="text-center" nowrap>'
                . '<a href="http://localhost/EwestStore/store/show.php?id=' . $value['id'] . '"  class="btn btn-success" name="show" style="margin:5px;">show</a>'
                . '<a href="http://localhost/EwestStore/store/edit.php?id=' . $value['id'] . '" class="btn btn-warning" name="update" style="margin:5px;">Edit</a>'
                . '<input type="button" id="' . $value['id'] . '" class="btn btn-danger delete_stored" name="delete_stored" value="Delete" style="margin:5px;">'
                . '</td>';
                echo '</tr>';
            }
            ?>
        </tbody>
    </table>
</div>

<!-- Dialog -->
<div id="dialog-confirm" title="Delete Stored component?" style="display: none">
    <p style="font-size: 16px; "><span class="ui-icon ui-icon-alert" style="float:left; margin:12px 12px 20px 0;"></span>These item will be permanently deleted and cannot be recovered.<br><h4>Are you sure?</h4></p>
</div>

<?php require_once './layout/footer.php'; ?>