<?php
header('Access_Control_Allow_Origin: *');
require_once dirname(__FILE__) . '/db/config.php';

//connect to database
$link = @mysqli_connect($config['server'], $config['username'], $config['password'], $config['database']);
if (!$link) {
    die('Error: ' . mysqli_connect_error());
}

$query = "select * from store";
$result = mysqli_query($link, $query);
$data = [];
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}
mysqli_close($link);
?>



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

        <div style="height: 30px;"></div>

        <div class="container">
            <div class="row">
                <div class="col-sm-offset-4 col-sm-4 text-center" style="font-size: 22px; font-weight: bold; color: #d9534f;">Store</div>
            </div>
            <div style="height: 30px;"></div>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="text-center">ID</th>
                            <th class="text-center">Manufacturer</th>
                            <th class="text-center">Distributer</th>
                            <th class="text-center">Manufacturer Part-num</th>
                            <th class="text-center">Distributer Part-num</th>
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
                            foreach ($value as $x)
                                echo '<td class="text-center">' . $x . '</td>';
                            echo '<td class="text-center"><a href="#" class="btn btn-success">show</a>'
                            . '<a href="#" class="btn btn-warning">Edit</a>'
                            . '<a href="#" class="btn btn-danger">Delete</a></td>';
                            echo '</tr>';
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>







        <!-- jQuery -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
        <!-- Plugin JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    </body>
</html>
