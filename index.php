<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>YOSRA</title>

    <link href="vendors/bootgrid/jquery.bootgrid.min.css'" rel="stylesheet">
    <link href="vendors/bower_components/animate.css/animate.min.css" rel="stylesheet">
    <link href="vendors/bower_components/sweetalert/dist/sweetalert-override.min.css" rel="stylesheet">
    <link href="vendors/bower_components/material-design-iconic-font/css/material-design-iconic-font.min.css" rel="stylesheet">
    <link href="vendors/socicon/socicon.min.css" rel="stylesheet">
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <link href="css/app.min.1.css" rel="stylesheet">
    <link href="css/app.min.2.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">
</head>

<body>

<div class="modal fade" id="main-modal" tabindex="-1" role="dialog" aria-labelledby="Modal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"></h4>
            </div>
            <div class="modal-body"></div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary btn-modal">Save</button>
            </div>
        </div><!-- /.modal-content -->
    </div>
</div>

    <?php include('partials/header.php')?>


<section id="main">

   
    <?php include('partials/sidebar.php')?>

    <section id="content">
        <div class="container">
          <?php include('module/index.php')?>
          
        </div>
    </section>

</section>

<?php include('partials/footer.php')?>

<script src="vendors/bower_components/jquery/dist/jquery.min.js"></script>
<script src="vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="vendors/bower_components/jquery.nicescroll/jquery.nicescroll.min.js"></script>
<script src="vendors/bower_components/Waves/dist/waves.min.js"></script>
<script src="vendors/bootstrap-growl/bootstrap-growl.min.js"></script>
<script src="vendors/bower_components/sweetalert/dist/sweetalert.min.js"></script>
<script src="vendors/bootgrid/jquery.bootgrid.min.js"></script>

<script src="js/functions.js"></script>
<script src="js/script.js"></script>
 <script src="js/Chart.min.js"></script>
 
    <script>
        $(function() {
            Chart.defaults.global.responsive = true;

            var pieData = [
                {
                    value: <?= 10 ?>,
                    color:"#F7464A",
                    highlight: "#FF5A5E",
                    label: "Students"
                },
                {
                    value: <?= 10 ?>,
                    color: "#46BFBD",
                    highlight: "#5AD3D1",
                    label: "Teachers"
                },
                {
                    value: <?= 2 ?>,
                    color: "#949FB1",
                    highlight: "#A8B3C5",
                    label: "Admins"
                },
                {
                    value: <?= 3?>,
                    color: "#4D5360",
                    highlight: "#616774",
                    label: "Parents"
                }

            ];

        

             window.onload = function(){
                var ctx = document.getElementById("users-chart").getContext("2d");
                window.myPie = new Chart(ctx).Pie(pieData);
            };

        });
    </script>


</body>
</html>