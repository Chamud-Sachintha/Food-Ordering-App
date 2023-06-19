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
    <link rel="stylesheet" type="text/css" href="{{asset('admin/css/material-design-iconic-font.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/css/jquery-jvectormap-1.2.2.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/css/jqvmap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/css/bootstrap-datetimepicker.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/app.css')}}" type="text/css">
</head>

<body>
    <div class="be-wrapper be-fixed-sidebar">
        {{ View::make('client_panel.Header') }}

        <div class="be-content">
            <div class="main-content container-fluid">
                <div class="row">
                    <div class="col-md-4 col-lg-4 col-sm-6">
                        <div class="widget widget-tile">
                            <div class="chart sparkline" id="spark1"></div>
                            <div class="data-info">
                              <div class="desc">My Orders</div>
                              <div class="value"><span class="indicator indicator-equal mdi mdi-chevron-right"></span><span class="number" data-toggle="counter" data-end="{{ $ordersCount }}">0</span>
                              </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-lg-4 col-sm-6">
                        <div class="widget widget-tile">
                            <div class="chart sparkline" id="spark1"></div>
                            <div class="data-info">
                              <div class="desc">All Eatables</div>
                              <div class="value"><span class="indicator indicator-equal mdi mdi-chevron-right"></span><span class="number" data-toggle="counter" data-end="{{ $eatableCount }}">0</span>
                              </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-lg-4 col-sm-6">
                        <div class="widget widget-tile">
                            <div class="chart sparkline" id="spark1"></div>
                            <div class="data-info">
                              <div class="desc">Categories</div>
                              <div class="value"><span class="indicator indicator-equal mdi mdi-chevron-right"></span><span class="number" data-toggle="counter" data-end="{{ $categoryCount }}">0</span>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-lg-4 col-sm-6">
                        <div class="widget widget-tile">
                            <div class="chart sparkline" id="spark1"></div>
                            <div class="data-info">
                              <div class="desc">Cart Items</div>
                              <div class="value"><span class="indicator indicator-equal mdi mdi-chevron-right"></span><span class="number" data-toggle="counter" data-end="{{ $cartItemsCount }}">0</span>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{asset('admin/js/jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('admin/js/perfect-scrollbar.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('admin/js/bootstrap.bundle.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('admin/js/app.js')}}" type="text/javascript"></script>
    <script src="{{asset('admin/js/jquery.flot.js')}}" type="text/javascript"></script>
    <script src="{{asset('admin/js/jquery.flot.pie.js')}}" type="text/javascript"></script>
    <script src="{{asset('admin/js/jquery.flot.time.js')}}" type="text/javascript"></script>
    <script src="{{asset('admin/js/jquery.flot.resize.js')}}" type="text/javascript"></script>
    <script src="{{asset('admin/js/jquery.flot.orderBars.js')}}" type="text/javascript"></script>
    <script src="{{asset('admin/js/curvedLines.js')}}" type="text/javascript"></script>
    <script src="{{asset('admin/js/jquery.flot.tooltip.js')}}" type="text/javascript"></script>
    <script src="{{asset('admin/js/jquery.sparkline.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('admin/js/countUp.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('admin/js/jquery-ui.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('admin/js/jquery.vmap.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('admin/js/jquery.vmap.world.js')}}" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            //-initialize the javascript
            App.init();
            App.dashboard();
        });
    </script>
</body>

</html>