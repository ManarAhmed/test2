<?php require_once '../layout/header.php'; ?>
<form class="form-horizontal" id="requiredForm">
    <div class="form-group">
        <label class="control-label col-sm-2" for="manufacturer">Manufacturer</label>
        <div class="col-sm-10">
            <input type="text" id="manufacturer" name="manufacturer" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="manu_website">Website</label>
        <div class="col-sm-10">
            <input type="text" id="manu_website" name="manu_website" class="form-control">
        </div>
    </div>
    <div class="form-group">        
        <div class="col-sm-offset-2 col-sm-10">
            <input type="button" value="Submit" id="submit_manu" class="btn btn-info" name="submit_manu">
        </div>
    </div>
</form>

<?php require_once '../layout/footer.php'; ?>