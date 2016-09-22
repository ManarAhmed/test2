$(function () {
//function to get form data
    var mystoreddata;
    var getStoredData = function () {
        var manufacturer = $('#manu').val();
        var distribter = $('#dist').val();
        var manu_num = $('#manu-num').val();
        var dist_num = $('#dist-num').val();
        var package = $('#package').val();
        var quantity = $('#quantity').val();
        var drawer_num = $('#drawer_num').val();
        mystoreddata = {
            manufacturer: manufacturer,
            distribter: distribter,
            manu_num: manu_num, 
            dist_num: dist_num,
            package: package,
            quantity: quantity,
            drawer_num: drawer_num,
        };
    }

//check validation then INSERT new stored component data
    $('#submit_stored').on('click', function () {
        if (checkStoredValid()) {
            addStoredData();
        }
    });
    
// check validation then EDIT stored component data
    $('#update_stored').on('click', function () {
        var id = $('#stored_id').val();
        if (checkStoredValid()) {
            updateStoredData(id);
        }
    });   
    
//INSERT new stored component data function
    var addStoredData = function () {
        getStoredData();
        mystoreddata['submit_stored']='ok';
        var setting = {
            url: 'http://localhost/EwestStore/db/storeTable.php',
            type: 'post',
            data: mystoreddata,
            success: function (data) {
                console.log(data);
                emptyStoredFields();
            },
            error: function (data) {
                console.log(data);
            }
        };
        $.ajax(setting);
    };

//EDIT OR DELETE stored component data function
    var updateStoredData = function (id) {
        getStoredData();
        mystoreddata['update_stored']='ok';
        var setting = {
            url: 'http://localhost/EwestStore/db/storeTable.php?id=' + id,
            type: 'get',
            data: mystoreddata,
            success: function (data) {
                console.log(data);
                window.location.href = "http://localhost/EwestStore/index.php";
            },
            error: function (data) {
                console.log('server error');
            }
        };
        $.ajax(setting);
    };

//check form validation function
    var checkStoredValid = function () {
        var valid = 1;
        $("input").each(function () {
            if ($(this).val() == '') {
                $(this).parent('div').parent('div').addClass('has-error has-feedback');
                $(this).after('<span class="glyphicon glyphicon-remove form-control-feedback"></span>')
                valid = 0;
            } else {
                $(this).next('.form-control-feedback').hide();
                $(this).parent('div').parent('div').removeClass('has-error has-feedback');
                $(this).parent('div').children('span').remove();

            }
        })
        return valid;
    };
    
//function to clear form data
    var emptyStoredFields = function () {
        $('#manu').val('');
        $('#dist').val('');
        $('#manu-num').val('');
        $('#dist-num').val('');
        $('#package').val('');
        $('#quantity').val('');
        $('#drawer_num').val('');
    };
});
                