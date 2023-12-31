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
  <link rel="stylesheet" type="text/css" href="{{asset('tables/css/dataTables.bootstrap4.css')}}">
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
              <div class="card-header card-header-divider">Add New Category<span class="card-subtitle">This is the
                  default bootstrap form layout</span></div>
              <div class="card-body">
                <form action="/addNewCategory" method="POST" enctype="multipart/form-data" onsubmit="addNewCategory()"
                  id="categoryForm">
                  @csrf
                  <div class="row">
                    <div class="col-md-6 col-sm-12 col-lg-6">
                      <label for="categoryName">Category Name</label>
                      <input type="text" class="form-control" placeholder="Burgers" name="categoryName">
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-12">
                      <label>Custom Button File Input</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text">
                            Upload
                          </span>
                        </div>
                        <div class="custom-file">
                          <input class="custom-file-input" name="categoryImage" type="file"
                            aria-describedby="inputGroupFileAddon01">
                          <label class="custom-file-label" for="categoryImage">Choose file</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 col-sm-12 col-lg-6">
                      <label>Basic Select</label>
                      <select class="form-control" name="status">
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                      </select>
                    </div>
                    <div class="col-md-6 col-sm-12 col-lg-6">
                      <label for="description">Category Description</label>
                      <textarea class="form-control" name="description"></textarea>
                    </div>
                  </div>
                  <div class="row pt-3">
                    <div class="col-sm-6">
                      <input type="submit" value="Submit" class="btn btn-space btn-primary">
                      {{-- <button class="btn btn-space btn-primary" type="submit">Submit</button> --}}
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
                      <th>Category Name</th>
                      <th>Category Image</th>
                      <th>Description(s)</th>
                      <th>Category Status</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($categories as $item)
                    @if ($loop->index %2 == 0)
                    <tr class="even">
                      <td>{{ $item->categoryName }}</td>
                      <td>
                        <img src="{{ asset('images/'.$item->categoryImage) }}" alt=""
                          style="width: 200px; height: 100px; background-attachment: fixed; background-position: center">
                      </td>
                      <td>{{ $item->description }}</td>
                      <td class="center">
                        @if ($item->status == 1)
                        Active
                        @else
                        Inactive
                        @endif
                      </td>
                      <td class="center">
                        <div class="row">
                          <div class="col-md-3 col-sm-12 col-lg-3">
                            <button class="btn btn-rounded btn-space btn-success edit" data-toggle="modal" data-target="#form-bp1">Update</button>
                          </div>
                          <div class="col-md-9 col-sm-12 col-lg-9">
                            <button class="btn btn-rounded btn-space btn-danger">Delete</button>
                          </div>
                        </div>
                      </td>
                    </tr>
                    @else
                    <tr class="odd">
                      <td>{{ $item->categoryName }}</td>
                      <td>
                        <img src="{{ asset('images/'.$item->categoryImage) }}" alt=""
                          style="width: 200px; height: 100px; background-attachment: fixed; background-position: center">
                      </td>
                      <td>{{ $item->description }}</td>
                      <td class="center">
                        @if ($item->status == 1)
                        Active
                        @else
                        Inactive
                        @endif
                      </td>
                      <td class="center">
                        <div class="row">
                          <div class="col-md-3 col-sm-12 col-lg-3">
                            <button class="btn btn-rounded btn-space btn-success edit" data-toggle="modal" data-target="#form-bp1">Update</button>
                          </div>
                          <div class="col-md-9 col-sm-12 col-lg-9">
                            <button class="btn btn-rounded btn-space btn-danger">Delete</button>
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

  <script src="{{asset('tables/js/jquery.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('admin/js/app.js')}}" type="text/javascript"></script>
  <script src="{{asset('tables/js/perfect-scrollbar.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('tables/js/bootstrap.bundle.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('tables/js/jszip.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('tables/js/jquery.dataTables.js')}}" type="text/javascript"></script>
  <script src="{{asset('tables/js/dataTables.bootstrap4.js')}}" type="text/javascript"></script>
  <script src="{{asset('tables/js/dataTables.buttons.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('tables/js/dataTables.responsive.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('tables/js/responsive.bootstrap4.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('tables/js/buttons.bootstrap4.min.js')}}" type="text/javascript"></script>
  <script type="text/javascript">
    $(document).ready(function () {
      //-initialize the javascript
      App.init();
      //App.dataTables();
    });

    var table = $('#table4').DataTable();

    table.on('click', '.edit', function () {
        $tr = $(this).closest('tr');

        if($($tr).hasClass('child')) {
            $tr = $tr.prev('.parent');
        }

        var data = table.row($tr).data();
        console.log(data);
        $('#vehicleId').val(data[0]);

        $('#exampleModal').modal('show');
      });

    function addNewCategory(e) {
      e.preventDefault();
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
</body>

</html>