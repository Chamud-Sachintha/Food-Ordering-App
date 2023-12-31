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
                    <div class="col-12">
                        <div class="card card-border-color card-border-color-primary">
                            <div class="card-header card-header-divider">See All Ongoing Orders<span
                                    class="card-subtitle">This is the default bootstrap form layout</span></div>
                            <div class="card-body">
                                <table class="table table-striped table-hover table-fw-widget" id="table4">
                                    <thead>
                                        <tr>
                                            <th>Order No</th>
                                            <th>Item Count</th>
                                            <th>Total Amount</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($allOrders as $item)
                                            @if ($loop->index %2 == 0)
                                                <tr class="even">
                                                    <td>{{ $item['orderId'] }}</td>
                                                    <td>
                                                       {{ $item['itemCount'] }}
                                                    </td>
                                                    <td>{{ $item['totalAmt'] }}</td>
                                                    <td class="center">
                                                        @if ($item['status'] == 0)
                                                            Pending
                                                        @elseif ($item['status'] == 1)
                                                            Preparing
                                                        @else
                                                            Delivering
                                                        @endif
                                                    </td>
                                                    <td class="center">
                                                        <div class="row">
                                                            <div class="col-md-3 col-sm-12 col-lg-3">
                                                                <a href="/client/orderItems/{{ $item['orderId'] }}" class="btn btn-rounded btn-space btn-success">View</a>
                                                            </div>
                                                            <div class="col-md-9 col-sm-12 col-lg-9">
                                                                <button
                                                                    class="btn btn-rounded btn-space btn-danger">Delete</button>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @else
                                                <tr class="odd">
                                                    <td>{{ $item['orderId'] }}</td>
                                                    <td>
                                                    {{ $item['itemCount'] }}
                                                    </td>
                                                    <td>{{ $item['totalAmt'] }}</td>
                                                    <td class="center">
                                                        @if ($item['status'] == 0)
                                                            Pending
                                                        @elseif ($item['status'] == 1)
                                                            Preparing
                                                        @else
                                                            Delivering
                                                        @endif
                                                    </td>
                                                    <td class="center">
                                                        <div class="row">
                                                            <div class="col-md-3 col-sm-12 col-lg-3">
                                                                <a href="/client/orderItems/{{ $item['orderId'] }}" class="btn btn-rounded btn-space btn-success">View</a>
                                                            </div>
                                                            <div class="col-md-9 col-sm-12 col-lg-9">
                                                                <button
                                                                    class="btn btn-rounded btn-space btn-danger">Delete</button>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endif
                                        @endforeach
                                    </tbody>
                                </table>
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