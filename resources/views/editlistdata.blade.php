<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Project Edit</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('assets/js/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('assets/css/dist/css/adminlte.min.css') }} ">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  @include('header');
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('navsidebar');

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Project Edit</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Project Edit</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-11">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">General</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <form action="/editlistdata" method="post">
		@csrf
            <div class="card-body">
              <div class="form-group">
                <label for="inputName"> Name</label>
             <input type="text" id="inputName" name="name" class="form-control" value="{{$edit_data['name']}}">
              </div>
              <div class="form-group">
                <label for="inputDescription">Email</label>
                 <input type="text" id="inputName" name="email" class="form-control" value="{{$edit_data['email']}}">
                 			<input type="hidden" name="id" value="{{$edit_data['id']}}">

              </div>
             <!--  <div class="form-group">
                <label for="inputStatus">Status</label>
                <select id="inputStatus" class="form-control custom-select">
                  <option disabled>Select one</option>
                  <option>On Hold</option>
                  <option>Canceled</option>
                  <option selected>Success</option>
                </select>
              </div> -->
             <!--  <div class="form-group">
                <label for="inputClientCompany">Client Company</label>
                <input type="text" id="inputClientCompany" class="form-control" value="Deveint Inc">
              </div> -->
             <!--  <div class="form-group">
                <label for="inputProjectLeader">Project Leader</label>
                <input type="text" id="inputProjectLeader" class="form-control" value="Tony Chicken">
              </div> -->
            </div>
        
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      
      </div>
      <div class="row">
        <div class="col-12">
        <!--   <a href="#" class="btn btn-secondary">Cancel</a> -->
          <input type="submit" value="Save Changes" class="btn btn-success float-right">
        </div>
      </div>
      </form>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

   @include('footer');

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('assets/js/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('assets/js/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('assets/css/dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('assets/css/dist/js/demo.js') }}"></script>
</body>
</html>



<!-- <!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="/editlistdata" method="post">
		@csrf
	<table border="1" align="center">
		<tr>
			<input type="hidden" name="id" value="{{$edit_data['id']}}">
			<td>
				Name <input type="text" name="name" value="{{$edit_data['name']}}" >
			</td>
		</tr>
		<tr>
			<td>
				Email <input type="text" name="email" value="{{$edit_data['email']}}" >
			</td>
		</tr>
		
		<tr>
			<td>
				 <input type="submit"  value="Update">
			</td>
		</tr>
	</table>
</form>

</body>
</html> -->