<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
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
                                            @foreach ($cartItems as $item)
                                            <tr>
                                                <td data-th="Product">
                                                    <div class="row">
                                                        <div class="col-md-3 text-left">
                                                            <img src={{ asset('images/'.$item->eatableImage) }}
                                                            alt=""
                                                            class="img-fluid d-none d-md-block rounded mb-2 shadow ">
                                                        </div>
                                                        <div class="col-md-9 text-left mt-sm-2">
                                                            <h4>{{ $item->eatableName }}</h4>
                                                            <p class="font-weight-light">{{ $item->categoryName }}</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td data-th="Price">LKR. {{ $item->eatablePrice }}</td>
                                                <td data-th="Quantity">
                                                    <input type="number"
                                                        class="form-control form-control-lg text-center"
                                                        value="{{ $item->quantity }}">
                                                </td>
                                                <td class="actions" data-th="">
                                                    <div class="text-right">
                                                        <button
                                                            class="btn btn-white border-secondary bg-white btn-md mb-2">
                                                            <i class="fas fa-sync"></i>
                                                        </button>
                                                        <button
                                                            class="btn btn-white border-secondary bg-white btn-md mb-2">
                                                            <i class="fas fa-trash"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <div class="float-right text-right">
                                        <h4>Subtotal:</h4>
                                        <h1>LKR. {{ $totalCartItemPrice }} .00</h1>
                                    </div>
                                    <div style="display: none">
                                        <input type="hidden" id="cartId" value="{{ $cartId }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4 d-flex align-items-center">
                                <div class="col-sm-6 order-md-2 text-right">
                                    <a href="catalog.html" class="btn btn-primary mb-4 btn-lg pl-5 pr-5" data-toggle="modal" data-target="#form-bp1">Checkout</a>
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


        function placeNewOrderRequest() {
            const cartId = document.getElementById("cartId").value;
            const deliveryLocation = document.getElementById("deliveryLocation").value;

            var hostwithHttp = window.location.protocol + "//" + window.location.host;
            values = {
                'cartId': cartId,
                'deliveryLocation': deliveryLocation
            }
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: hostwithHttp + "/client/placeNewOrder",
                type: "post",
                data: values ,
                success: function (response) {
                    window.$('#mod-success').modal();
                    // You will get response from your PHP page (what you echo or print)
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.log(textStatus, errorThrown);
                }
            });
        }

    </script>

    <div class="modal fade colored-header colored-header-primary" id="form-bp1" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header modal-header-colored">
                    <h3 class="modal-title">Type Delivery Location Address</h3>
                    <button class="close md-close" type="button" data-dismiss="modal" aria-hidden="true"><span
                            class="mdi mdi-close"> </span></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Deliver Location Address.</label>
                        <input class="form-control" type="text" placeholder="No 519/B Kiribathgoda" id="deliveryLocation">
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary md-close" type="button" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-primary md-close" type="button" data-dismiss="modal" onclick="placeNewOrderRequest()">Proceed</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="mod-success" tabindex="-1" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button class="close" type="button" data-dismiss="modal" aria-hidden="true"><span class="mdi mdi-close"></span></button>
            </div>
            <div class="modal-body">
              <div class="text-center">
                <div class="text-success"><span class="modal-main-icon mdi mdi-check"></span></div>
                <h3>Awesome!</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>Fusce ultrices euismod lobortis.</p>
                <div class="mt-8">
                  <button class="btn btn-space btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                  <button class="btn btn-space btn-success" type="button" data-dismiss="modal">Proceed</button>
                </div>
              </div>
            </div>
            <div class="modal-footer"></div>
          </div>
        </div>
    </div>

</body>

</html>