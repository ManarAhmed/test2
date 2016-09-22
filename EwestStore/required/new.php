<?php
require_once '../db/connection.php';
$query1 = "select id,name from manufacturer";
$query2 = "select id,name from distributer";
$result1 = mysqli_query($link, $query1);
$result2 = mysqli_query($link, $query2);
$manufacturers = [];
while ($row1 = mysqli_fetch_assoc($result1)) {
    $manufacturers[] = $row1;
}
$distributers = [];
while ($row2 = mysqli_fetch_assoc($result2)) {
    $distributers[] = $row2;
}
mysqli_close($link);
require_once '../layout/header.php';
?>

<form class="form-horizontal" id="requiredForm">
    <div class="form-group">
        <label class="control-label col-sm-2" for="manu">Manufacturer</label>
        <div class="col-sm-10">
            <select id="manu" name="manufacturer" class="form-control">
                <?php
                foreach ($manufacturers as $key => $value) {
                    echo "<option value='".$value['id']."'>".$value['name']."</option>";
                }
                ?>
            </select> 
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="dist">Distributer</label>
        <div class="col-sm-10">
            <select id="dist" name="distribter" class="form-control">
                <?php
                foreach ($distributers as $key => $value) {
                    echo "<option value='".$value['id']."'>".$value['name']."</option>";
                }
                ?>
            </select> 
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="manu-num">Manufacturer Part-num</label>
        <div class="col-sm-10">
            <input type="text" id="manu-num" name="manu_num" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="dist-num">Distributer Part-num</label>
        <div class="col-sm-10">
            <input type="text" id="dist-num" name="dist_num" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="package">Package</label>
        <div class="col-sm-10">
            <input type="text" id="package" name="package" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="req-quantity">Required Quantity</label>
        <div class="col-sm-10">
            <input type="number" min="0" step="1" id="req-quantity" name=" req_quantity" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="resp-user">Responsible User</label>
        <div class="col-sm-10">
            <input type="text" id="resp-user" name="resp_user" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="project">Project</label>
        <div class="col-sm-10">
            <input type="text" id="project" name="project" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="priority">Priority</label>
        <div class="col-sm-10">
            <input type="number" min="1" max="5" step="1" id="priority" name="priority" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="due-date">Due to date</label>
        <div class="col-sm-10">
            <input type="text" id="due-date" name="due_date" class="form-control">
        </div>
    </div>
    <div class="form-group">        
        <div class="col-sm-offset-2 col-sm-10">
            <input type="button" value="Submit" id="submit" class="btn btn-info" name="submit">
        </div>
    </div>
</form>

<?php require_once '../layout/footer.php'; ?>