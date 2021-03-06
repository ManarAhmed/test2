<?php
require_once './db/connection.php';
$query = "select * from distributer";
$result = mysqli_query($link, $query);
$data = [];
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}
mysqli_close($link);
require_once './layout/header.php';
?> 

<div class="row">
    <div class="col-sm-offset-4 col-sm-4 text-center" style="font-size: 22px; font-weight: bold; color: #d9534f;">Distributers</div>
</div>
<div style="height: 30px;"></div>
<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th class="text-center">ID</th>
                <th class="text-center">Distributer</th>
                <th class="text-center">Website</th>
                <th class="text-center" colspan="3"></th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($data as $key => $value) {
                echo'<tr>';
                echo '<td class="text-center" >' . $value['id'] . '</td>';
                echo '<td class="text-center" >' . $value['name'] . '</td>';
                echo '<td class="text-center" >' . $value['website'] . '</td>';
                    
                echo '<td class="text-center" nowrap>'
                . '<a href="http://localhost/EwestStore/distributer/show.php?id=' . $value['id'] . '"  class="btn btn-success" name="show" style="margin:5px;">show</a>'
                . '<a href="http://localhost/EwestStore/distributer/edit.php?id=' . $value['id'] . '" class="btn btn-warning" name="update" style="margin:5px;">Edit</a>'
                . '<input type="button" id="' . $value['id'] . '" class="btn btn-danger delete_distributer" name="delete_distributer" value="Delete" style="margin:5px;">'
                . '</td>';
                echo '</tr>';
            }
            ?>
        </tbody>
    </table>
</div>

<!-- Dialog -->
<div id="dialog-confirm" title="Delete Distributer?" style="display: none">
    <p style="font-size: 16px; "><span class="ui-icon ui-icon-alert" style="float:left; margin:12px 12px 20px 0;"></span>These item will be permanently deleted and cannot be recovered.<br><h4>Are you sure?</h4></p>
</div>

<?php require_once './layout/footer.php'; ?>