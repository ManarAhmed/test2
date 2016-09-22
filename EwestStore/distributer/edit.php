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

<form class="form-horizontal" id="requiredForm">
    
    <input type="hidden" id="dist_id" name="dist_id" class="form-control" value="<?php echo $data[0]['id'] ?>">
    <div class="form-group">
        <label class="control-label col-sm-2" for="distributer">Distributer</label>
        <div class="col-sm-10">
            <input type="text" id="distributer" name="distributer" class="form-control" value="<?php echo $data[0]['name'] ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="dist_website">Distributer</label>
        <div class="col-sm-10">
            <input type="text" id="dist_website" name="dist_website" class="form-control" value="<?php echo $data[0]['website'] ?>">
        </div>
    </div>
    <div class="form-group">        
        <div class="col-sm-offset-2 col-sm-10">
            <input type="button" value="Update" id="update_dist" class="btn btn-info" name="update_dist">
        </div>
    </div>
    
</form>

<?php require_once '../layout/footer.php'; ?>