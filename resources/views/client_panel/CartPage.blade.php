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
    <script src="https://kit.fontawesome.com/958567d2cc.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('admin/css/app.css')}}" type="text/css">
</head>

<body>
    <div class="be-wrapper be-fixed-sidebar">
        {{ View::make('client_panel.Header') }}

        <div class="be-content">
            <div class="main-content container-fluid">
                <div class="card card-border-color card-border-color-primary">
                    <section class="pt-5 pb-5">
                        <div class="container">
                            <div class="row w-100">
                                <div class="col-lg-12 col-md-12 col-12">
                                    <h3 class="display-5 mb-2 text-center">Eatable Cart</h3>
                                    <p class="mb-5 text-center">
                                        <i class="text-info font-weight-bold">3</i> items in your cart
                                    </p>
                                    <table id="shoppingCart" class="table table-condensed table-responsive">
                                        <thead>
                                            <tr>
                                                <th style="width:60%">Product</th>
                                                <th style="width:12%">Price</th>
                                                <th style="width:10%">Quantity</th>
                                                <th style="width:16%"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td data-th="Product">
                                                    <div class="row">
                                                        <div class="col-md-3 text-left">
                                                            <img src="https://via.placeholder.com/250x250/5fa9f8/ffffff"
                                                                alt=""
                                                                class="img-fluid d-none d-md-block rounded mb-2 shadow ">
                                                        </div>
                                                        <div class="col-md-9 text-left mt-sm-2">
                                                            <h4>Product Name</h4>
                                                            <p class="font-weight-light">Brand &amp; Name</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td data-th="Price">$49.00</td>
                                                <td data-th="Quantity">
                                                    <input type="number" class="form-control form-control-lg text-center"
                                                        value="1">
                                                </td>
                                                <td class="actions" data-th="">
                                                    <div class="text-right">
                                                        <button class="btn btn-white border-secondary bg-white btn-md mb-2">
                                                            <i class="fas fa-sync"></i>
                                                        </button>
                                                        <button class="btn btn-white border-secondary bg-white btn-md mb-2">
                                                            <i class="fas fa-trash"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="float-right text-right">
                                        <h4>Subtotal:</h4>
                                        <h1>$99.00</h1>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4 d-flex align-items-center">
                                <div class="col-sm-6 order-md-2 text-right">
                                    <a href="catalog.html" class="btn btn-primary mb-4 btn-lg pl-5 pr-5">Checkout</a>
                                </div>
                                <div class="col-sm-6 mb-3 mb-m-1 order-md-1 text-md-left">
                                    <a href="catalog.html">
                                        <i class="fas fa-arrow-left mr-2"></i> Continue Shopping</a>
                                </div>
                            </div>
                        </div>
                    </section>
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
        });

        var itemCount = 0;

        function setInc() {
            this.itemCount += 1;
            document.getElementById("inc").value = this.itemCount;
        }

        function setDec() {
            if (this.itemCount > 0) {
                this.itemCount -= 1;
                document.getElementById("inc").value = this.itemCount;
            }
        }
    </script>
</body>

</html>