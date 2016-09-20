<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <!-- Bootstrap Core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

        <?php
        // put your code here
        ?>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="http://localhost/EwestStore">Brand</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="http://localhost/EwestStore/store.php">Store <span class="sr-only">(current)</span></a></li>
                        <li><a href="http://localhost/EwestStore/required.php">Required</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

        <div class="container">
            <!--action="db/requiredTable.php" method="post"-->
            <form class="form-horizontal" id="requiredForm">
                <div class="form-group">
                    <label class="control-label col-sm-2" for="manu">Manufacturer</label>
                    <div class="col-sm-10">
                        <input type="text" id="manu" name="manufacturer" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="dist">Distributer</label>
                    <div class="col-sm-10">
                        <input type="text" id="dist" name="distribter" class="form-control">
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
                        <input type="number" id="priority" name="priority" class="form-control">
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
                        <!--<button type="submit" class="btn btn-info" name="submit">Submit</button>-->
                        <input type="button" value="Submit" id="submit" class="btn btn-info" name="submit">
                    </div>
                </div>
            </form>
        </div>
        <!-- jQuery -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
        <!-- Plugin JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
        <!--Application JavaScript--> 
        <script src="resources/js/EwestStore.js"></script>
    </body>
</html>
