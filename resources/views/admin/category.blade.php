<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Paper Dashboard 2 by Creative Tim
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="admin_dist/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="admin_dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="admin_dist/css/paper-dashboard.css?v=2.0.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="admin_dist/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    
    @include('adminassets.sidebar')
   
    <div class="main-panel">
      <!-- Navbar -->
      @include('adminassets.navbar')
      <!-- End Navbar -->
      <!-- <div class="panel-header panel-header-sm">
  
  
</div> -->
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Video Category</h4>
                <a href="#modalCenter"  class="btn btn-primary btn-circle" data-toggle="modal" style="float:right;">
                <i class="fas fa-plus"></i>
                </a>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        Sr.no
                      </th>
                      <th>
                        Category Name
                      </th>
                      <th>
                        Edit
                      </th>
                      <th>
                        Delete
                      </th>
                    </thead>
                    <tbody>
                    <?php $i = 1; ?>
                    @foreach($categorys as $category)
                      <tr>
                        <td>{{$i++}}
                        </td>
                        <td>
                        {{$category->category_name}}
                        </td>
                        <td>
                      
                        <a href="{{ URL::route('admincategory.edit',$category->id) }}" class="btn btn-info btn-circle edit_model" data-toggle="modal" data-target="#edit-model">
                        <i class="fas fa-edit"></i>
                        </a>
                        </td>
                        <td>
                        <form action="{{ URL::route('admincategory.destroy', $category->id) }}" method="POST">
                        <input type="hidden" name="_method" value="DELETE">
								        <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
                        
                        <button  id="remove" class="btn btn-danger btn-circle"><i class="fas fa-trash"></i></button>
                       </form>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
         
        </div>
      </div>
      <form id="insert_form" name="form1" action="{{route('admincategory.store')}}" method="post">
      @csrf
      <div id="modalCenter" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Create Category</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="hidden">
                    <input type="hidden" class="form-control" name="category_id"><br>
                </div>
                <div class="modal-body">
                    <label>Category Name:</label>
                    <input type="text" class="form-control" name="category_name" placeholder="Enter category"><br>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" id="insert">Insert</button>
                </div>
            </div>
        </div>
    </div>

    </div>
    </form>
 

    <form action="{{ URL::route('admincategory.update', $category->id) }}" name="form2" method="post">
    @csrf
    @method('PATCH')

      <div id="edit-model" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Update Category</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <label>Category Name:</label>

                  
                    <input type="text" class="form-control" id="category_name" name="category_name" value="{{$category->category_name }}"><br>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" id="insert">Update</button>
                </div>
            </div>
        </div>
    </div>
    </form>
      <footer class="footer footer-black  footer-white ">
        <div class="container-fluid">
          <div class="row">
            <nav class="footer-nav">
              <ul>
                <li>
                  <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>
                </li>
                <li>
                  <a href="http://blog.creative-tim.com/" target="_blank">Blog</a>
                </li>
                <li>
                  <a href="https://www.creative-tim.com/license" target="_blank">Licenses</a>
                </li>
              </ul>
            </nav>
            <div class="credits ml-auto">
              <span class="copyright">
                ©
                <script>
                  document.write(new Date().getFullYear())
                </script>, made with <i class="fa fa-heart heart"></i> by Creative Tim
              </span>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <script>  
        $('#modalCenter').on('hidden.bs.model',function(e){
            $this.find('#form1')[0].reset();
        });
        $('#edit-model').on('hidden.bs.model',function(e){
            $this.find('#form2')[0].reset();
        });
 </script>
 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> 
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>   
  <!--   Core JS Files   -->
  <script src="admin_dist/js/core/jquery.min.js"></script>
  <script src="admin_dist/js/core/popper.min.js"></script>
  <script src="admin_dist/js/core/bootstrap.min.js"></script>
  <script src="admin_dist/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="admin_dist/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="admin_dist/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="admin_dist/js/paper-dashboard.min.js?v=2.0.0" type="text/javascript"></script>
  <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="admin_dist/demo/demo.js"></script>
</body>

</html>