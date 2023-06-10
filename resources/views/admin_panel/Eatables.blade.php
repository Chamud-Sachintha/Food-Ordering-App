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
                <div class="row">
                    <div class="col-12">
                      <div class="card card-border-color card-border-color-primary">
                        <div class="card-header card-header-divider">Add New Eatable<span class="card-subtitle">This is the default bootstrap form layout</span></div>
                        <div class="card-body">
                          <form>
                            <div class="row">
                                <div class="col-md-6 col-sm-12 col-lg-6">
                                    <label for="categoryName">Category Name</label>
                                    <input type="text" class="form-control" placeholder="Burgers" name="categoryName">
                                </div>
                                <div class="col-md-6 col-lg-6 col-sm-12">
                                    <label>Custom Button File Input</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroupFileAddon01">
                                                Upload
                                            </span>
                                        </div>
                                        <div class="custom-file">
                                            <input class="custom-file-input" id="inputGroupFile01" type="file" aria-describedby="inputGroupFileAddon01">
                                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-12 col-lg-6">
                                    <label for="categoryDescription">Category Description</label>
                                    <textarea class="form-control" name="categoryDescription"></textarea>
                                </div>
                            </div>
                            <div class="row pt-3">
                              <div class="col-sm-6">
                                <button class="btn btn-space btn-primary" type="submit">Submit</button>
                                <button class="btn btn-space btn-secondary">Cancel</button>
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card card-table">
                            <div class="card-header">Expandable responsive table</div>
                            <div class="card-body">
                              <table class="table table-striped table-hover table-fw-widget" id="table4">
                                <thead>
                                  <tr>
                                    <th>Rendering engine</th>
                                    <th>Browser</th>
                                    <th>Platform(s)</th>
                                    <th>Engine version</th>
                                    <th>CSS grade</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr class="odd gradeX">
                                    <td>Trident</td>
                                    <td>
                                      Internet
                                      Explorer 4.0
                                    </td>
                                    <td>Win 95+</td>
                                    <td class="center"> 4</td>
                                    <td class="center"></td>
                                  </tr>
                                  <tr class="even gradeC">
                                    <td>Trident</td>
                                    <td>
                                      Internet
                                      Explorer 5.0
                                    </td>
                                    <td>Win 95+</td>
                                    <td class="center">5</td>
                                    <td class="center">C</td>
                                  </tr>
                                  <tr class="odd gradeA">
                                    <td>Trident</td>
                                    <td>
                                      Internet
                                      Explorer 5.5
                                    </td>
                                    <td>Win 95+</td>
                                    <td class="center">5.5</td>
                                    <td class="center">A</td>
                                  </tr>
                                  <tr class="even gradeA">
                                    <td>Trident</td>
                                    <td>
                                      Internet
                                      Explorer 6
                                    </td>
                                    <td>Win 98+</td>
                                    <td class="center">6</td>
                                    <td class="center">A</td>
                                  </tr>
                                  <tr class="odd gradeA">
                                    <td>Trident</td>
                                    <td>Internet Explorer 7</td>
                                    <td>Win XP SP2+</td>
                                    <td class="center">7</td>
                                    <td class="center">A</td>
                                  </tr>
                                  <tr class="even gradeA">
                                    <td>Trident</td>
                                    <td>AOL browser (AOL desktop)</td>
                                    <td>Win XP</td>
                                    <td class="center">6</td>
                                    <td class="center">A</td>
                                  </tr>
                                  <tr class="gradeA">
                                    <td>Gecko</td>
                                    <td>Firefox 1.0</td>
                                    <td>Win 98+ / OSX.2+</td>
                                    <td class="center">1.7</td>
                                    <td class="center">A</td>
                                  </tr>
                                  <tr class="gradeA">
                                    <td>Gecko</td>
                                    <td>Firefox 1.5</td>
                                    <td>Win 98+ / OSX.2+</td>
                                    <td class="center">1.8</td>
                                    <td class="center">A</td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                    </div>
                </div>
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