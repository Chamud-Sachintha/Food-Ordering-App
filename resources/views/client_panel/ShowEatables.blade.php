<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content>
    <meta name="author" content>
    <link rel="shortcut icon" href="images/logo-fav.png">
    <title>Beagle</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/css/perfect-scrollbar.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/css/material-design-iconic-font.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/css/jquery-jvectormap-1.2.2.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/css/jqvmap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/css/bootstrap-datetimepicker.min.css')}}">
    <script src="https://kit.fontawesome.com/958567d2cc.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('admin/css/app.css')}}" type="text/css">
    <style>
        a {
            text-decoration: none;
        }

        .food-card {
            background: #fff;
            border-radius: 5px;
            overflow: hidden;
            margin-bottom: 30px;
            -webkit-box-shadow: 0 2px 10px rgba(0, 0, 0, 0.06);
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.06);
            -webkit-transition: 0.1s;
            transition: 0.1s;
        }

        .food-card:hover {
            -webkit-box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        }

        .food-card .food-card_img {
            display: block;
            position: relative;
        }

        .food-card .food-card_img img {
            width: 100%;
            height: 200px;
            -o-object-fit: cover;
            object-fit: cover;
        }

        .food-card .food-card_img i {
            position: absolute;
            top: 20px;
            right: 30px;
            color: #fff;
            font-size: 25px;
            -webkit-transition: all 0.1s;
            transition: all 0.1s;
        }

        .food-card .food-card_img i:hover {
            top: 18px;
            right: 28px;
            font-size: 29px;
        }

        .food-card .food-card_content {
            padding: 15px;
        }

        .food-card .food-card_content .food-card_title-section {
            /* height: 100px; */
            overflow: hidden;
        }

        .food-card .food-card_content .food-card_title-section .food-card_title {
            font-size: 24px;
            color: #333;
            font-weight: 500;
            display: block;
            line-height: 1.3;
            margin-bottom: 8px;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .food-card .food-card_content .food-card_title-section .food-card_author {
            font-size: 15px;
            display: block;
        }

        .food-card .food-card_content .food-card_bottom-section .space-between {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
        }

        .food-card .food-card_content .food-card_bottom-section .food-card_subscribers {
            margin-left: 17px;
        }

        .food-card .food-card_content .food-card_bottom-section .food-card_subscribers img,
        .food-card .food-card_content .food-card_bottom-section .food-card_subscribers .food-card_subscribers-count {
            height: 45px;
            width: 45px;
            border-radius: 45px;
            border: 3px solid #fff;
            margin-left: -17px;
            float: left;
            background: #f5f5f5;
        }

        .food-card .food-card_content .food-card_bottom-section .food-card_subscribers .food-card_subscribers-count {
            position: relative;
        }

        .food-card .food-card_content .food-card_bottom-section .food-card_subscribers .food-card_subscribers-count span {
            position: absolute;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            font-size: 13px;
        }

        .food-card .food-card_content .food-card_bottom-section .food-card_price {
            font-size: 28px;
            font-weight: 500;
            color: #F47A00;
        }

        .food-card .food-card_content .food-card_bottom-section .food-card_order-count {
            width: 130px;
        }

        .food-card .food-card_content .food-card_bottom-section .food-card_order-count input {
            background: #f5f5f5;
            border-color: #f5f5f5;
            -webkit-box-shadow: none;
            box-shadow: none;
            text-align: center;
        }

        .food-card .food-card_content .food-card_bottom-section .food-card_order-count button {
            border-color: #f5f5f5;
            border-width: 3px;
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        @media (min-width: 992px) {
            .food-card--vertical {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                position: relative;
                height: 235px;
            }

            .food-card--vertical .food-card_img img {
                width: 200px;
                height: 100%;
                -o-object-fit: cover;
                object-fit: cover;
            }
        }
    </style>
</head>

<body>
    <div class="be-wrapper be-fixed-sidebar">

        {{ View::make('client_panel.Header') }}

        <div class="be-content">
            <div class="main-content container-fluid">
                <div class="row">
                    {{-- <button class="btn btn-space btn-success" data-toggle="modal" data-target="#mod-success" type="button">Success</button> --}}
                    @foreach ($eatables as $item)
                        <div class="col-4">
                            <div class="food-card">
                                <div class="food-card_img">
                                    <img src="{{ asset('images/'.$item->eatableImage) }}" alt="">
                                    <a href="#!"><i class="far fa-heart"></i></a>
                                </div>
                                <div class="food-card_content">
                                    <div class="food-card_title-section">
                                        <a href="#!" class="food-card_title">{{ $item->eatableName }}</a>
                                        <a href="#!" class="food-card_author">{{ $item->categoryName }}</a>
                                    </div>
                                    <div class="food-card_bottom-section">
                                        <hr>
                                        <div class="space-between">
                                            <div class="food-card_price">
                                                <span>Rs. {{ $item->eatablePrice }}.00</span>
                                            </div>
                                            <div class="food-card_order-count">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <button class="btn btn-outline-secondary minus-btn" type="button" id="button-addon1" onclick="setDec({{ $item->id }}, document.getElementById({{ $item->id }}).value)"><i class="fa fa-minus"></i></button>
                                                    </div>
                                                    <input type="text" class="form-control input-manulator" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1" value="0" id="{{ $item->id }}">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-outline-secondary add-btn" type="button" id="button-addon1" onclick="setInc({{ $item->id }}, document.getElementById({{ $item->id }}).value)"><i class="fa fa-plus"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="space-between">
                                            <button class="btn btn-success" style="width: 100%" onclick="addToCart({{ $item->id }})">Add to Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
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

        function setInc(id, currentValue) {
            var num = Number(currentValue);
            num += 1;
            document.getElementById(id).value = num;
        }

        function setDec(id, currentValue) {
            if (currentValue > 0) {
                currentValue -= 1;
                document.getElementById(id).value = currentValue;
            }
        }

        function addToCart(eatableId) {
            var hostwithHttp = window.location.protocol + "//" + window.location.host;
            values = {
                'clientId': {{ Session::get('client')['id'] }},
                'eatableId': eatableId,
                'quantity': document.getElementById(eatableId).value
            }
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: hostwithHttp + "/client/addItemToCart",
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