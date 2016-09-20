$(function () {
    $("#due-date").datepicker();
    $("#due-date").datepicker("option", "dateFormat", "yy-mm-dd");

    $('#submit').on('click', function () {
        if(checkValid()){
            sendData();
        }
    });
    var sendData = function () {
        var manufacturer = $('#manu').val();
        var distribter = $('#dist').val();
        var manu_num = $('#manu-num').val();
        var dist_num = $('#dist-num').val();
        var package = $('#package').val();
        var req_quantity = $('#req-quantity').val();
        var resp_user = $('#resp-user').val();
        var project = $('#project').val();
        var priority = $('#priority').val();
        var due_date = $('#due-date').val();
//        var formData = [manufacturer,distribter,manu_num,dist_num,package,req_quantity,resp_user,project,priority,due_date];
//        var formIDs = ['manu','dist','manu-num','dist-num','package','req-quantity','resp-user','project','priority','due-date'];
        
        var mydata = {
            manufacturer: manufacturer,
            distribter: distribter,
            manu_num: manu_num,
            dist_num: dist_num,
            package: package,
            req_quantity: req_quantity,
            resp_user: resp_user,
            project: project,
            priority: priority,
            due_date: due_date
        };
        var setting = {
            url: 'http://localhost/EwestStore/db/requiredTable.php',
            type: 'post',
            data: mydata,
            success: function (data) {
                console.log(data);
                $('#manu').val('');
                $('#dist').val('');
                $('#manu-num').val('');
                $('#dist-num').val('');
                $('#package').val('');
                $('#req-quantity').val('');
                $('#resp-user').val('');
                $('#project').val('');
                $('#priority').val('');
                $('#due-date').val('');
            },
            error: function (data) {
                console.log('server error');
            }
        };

        $.ajax(setting);
    };
 //check form validation   
    var checkValid = function(){
//        for(i=0;i<formIDs.length;i++){
//            if(formData[i]==''){
//                $("").addClass('has-error has-feedback');
//                return false;
//            }
//        }
var valid =1;
        $("input").each(function(){
            if($(this).val()==''){
                $(this).parent('div').parent('div').addClass('has-error has-feedback');
                $(this).after('<span class="glyphicon glyphicon-remove form-control-feedback"></span>')
                valid =0;
            }else{
                $(this).next('.form-control-feedback').hide();
                $(this).parent('div').parent('div').removeClass('has-error has-feedback');
                $(this).parent('div').children('span').remove();
                
            }
        })
        return valid;
    };
});
                