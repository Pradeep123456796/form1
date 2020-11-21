<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | DataTables</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('assets/js/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('assets/js/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/js/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/js/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('assets/css/dist/css/adminlte.min.css') }}">
</head>
<body class="hold-transition sidebar-mini">
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
            <h1>Productlist</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href=" {{url('product')}} ">Add Product</a></li>
                 <li class="breadcrumb-item"><a href=" {{url('export-excel')}} ">Down Excel</a></li>
                    <li class="breadcrumb-item"><a href=" {{url('export-csv')}} ">Down Csv</a></li>
              <li class="breadcrumb-item"><a href=" {{url('import-excel')}} ">Add Csv</a></li>
              <li class="breadcrumb-item"><a href=" {{url('import-csv')}} ">Add Excel</a>
         </li>
           <li class="breadcrumb-item"><a href=" {{url('downproductpdf')}} ">Down Pdf</a>
         </li>
          <li class="breadcrumb-item active">Productlistlist</li>



            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
       
            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Product List </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1"  class="table table-bordered table-striped">
                  <thead>
                    <form method="get" action="productlist" >
                    <tr><td><input type="text" name="query" 
                        value="" > 

            
                    <input type="submit" name="submit"  value="search"></td></tr>
                  </form>
          
                 <tr>
		<!-- 	<td>No</td> -->
			<td>Product Name</td>
			<td>Product image</td>
			<td>Product Type</td>
			<td>Edit</td>
			<td>Delete</td>
		</tr>
	</thead>
			@foreach($product_list as $list_value)
			<tr>
	
				<td>{{ $list_value['product_name'] }}</td>
				<td><img src="{{ asset('images') }}/{{$list_value['product_image']}} " style="width: 100px; height: 100px;" >  </td>
				<td> {{$list_value['category_name']}} </td>
      			<td><a href={{"producteditlistdata/".$list_value['id']}} >Edit</a></td>
      			<td><a href={{"productdeletedata/".$list_value['id']}} >Delete</a></td>
			</tr>
			 @endforeach
                  </tbody>
                  <tfoot>

                 <!--  <tr>
                    <th>Rendering engine</th>
                    <th>Browser</th>
                    <th>Platform(s)</th>
                    <th>Engine version</th>
                    <th>CSS grade</th>
                  </tr> -->
                  </tfoot>
                </table>




              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
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
<!-- DataTables  & Plugins -->
<script src="{{ asset('assets/js/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/jszip/jszip.min.js' ) }}"></script>
<script src="{{ asset('assets/js/plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('assets/js/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('assets/css/dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('assets/css/dist/js/demo.js') }}"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      /*"buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]*/
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>




