<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content>
    <meta name="author" content>
    <link rel="shortcut icon" href="images/logo-fav.png">
    <title>Beagle</title>
    <link rel="stylesheet" type="text/css" href="{{asset('admin/css/perfect-scrollbar.css')}}">
    <link rel="stylesheet" type="text/css" href="css/material-design-iconic-font.min.css">
    <link rel="stylesheet" type="text/css" href="css/jquery-jvectormap-1.2.2.css">
    <link rel="stylesheet" type="text/css" href="css/jqvmap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="css/app.css" type="text/css">
</head>

<body>
    <div class="be-wrapper be-fixed-sidebar">
        {{ View::make('admin_panel.Header') }}

        <div class="be-content">
            <div class="main-content container-fluid">

            </div>
        </div>
    </div>

    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="js/perfect-scrollbar.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <script src="js/app.js" type="text/javascript"></script>
    <script src="js/jquery.flot.js" type="text/javascript"></script>
    <script src="js/jquery.flot.pie.js" type="text/javascript"></script>
    <script src="js/jquery.flot.time.js" type="text/javascript"></script>
    <script src="js/jquery.flot.resize.js" type="text/javascript"></script>
    <script src="js/jquery.flot.orderBars.js" type="text/javascript"></script>
    <script src="js/curvedLines.js" type="text/javascript"></script>
    <script src="js/jquery.flot.tooltip.js" type="text/javascript"></script>
    <script src="js/jquery.sparkline.min.js" type="text/javascript"></script>
    <script src="js/countUp.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui.min.js" type="text/javascript"></script>
    <script src="js/jquery.vmap.min.js" type="text/javascript"></script>
    <script src="js/jquery.vmap.world.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            //-initialize the javascript
            App.init();
            App.dashboard();
        });
    </script>
</body>

</html>