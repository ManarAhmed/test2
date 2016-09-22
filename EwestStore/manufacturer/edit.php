<?php
require_once '../db/connection.php';
$query = 'select * from manufacturer where id =' . $_GET["id"];
$result = mysqli_query($link, $query);
$data = [];
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}
mysqli_close($link);
require_once '../layout/header.php'; 
?>

<form class="form-horizontal" id="requiredForm">
    
    <input type="hidden" id="manu_id" name="manu_id" class="form-control" value="<?php echo $data[0]['id'] ?>">
    <div class="form-group">
        <label class="control-label col-sm-2" for="manufacturer">Manufacturer</label>
        <div class="col-sm-10">
            <input type="text" id="manufacturer" name="manufacturer" class="form-control" value="<?php echo $data[0]['name'] ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="manu_website">Website</label>
        <div class="col-sm-10">
            <input type="text" id="manu_website" name="manu_website" class="form-control" value="<?php echo $data[0]['website'] ?>">
        </div>
    </div>
    <div class="form-group">        
        <div class="col-sm-offset-2 col-sm-10">
            <input type="button" value="Update" id="update_manu" class="btn btn-info" name="update_manu">
        </div>
    </div>
    
</form>

<?php require_once '../layout/footer.php'; ?>