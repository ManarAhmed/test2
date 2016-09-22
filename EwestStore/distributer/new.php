<?php require_once '../layout/header.php'; ?>
<form class="form-horizontal" id="requiredForm">
    <div class="form-group">
        <label class="control-label col-sm-2" for="distributer">Distributer</label>
        <div class="col-sm-10">
            <input type="text" id="distributer" name="distributer" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="dist_website">Website</label>
        <div class="col-sm-10">
            <input type="text" id="dist_website" name="dist_website" class="form-control">
        </div>
    </div>
    <div class="form-group">        
        <div class="col-sm-offset-2 col-sm-10">
            <input type="button" value="Submit" id="submit_dist" class="btn btn-info" name="submit_dist">
        </div>
    </div>
</form>

<?php require_once '../layout/footer.php'; ?>