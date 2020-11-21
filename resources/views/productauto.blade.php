<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Product Form</title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('assets/js/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('assets/css/dist/css/adminlte.min.css') }}">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

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
            <h1>Add Product </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="productlist">ProductList</a></li>
              <li class="breadcrumb-item active">Add Product</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Quick Add Product <small>Add Product</small></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                <!-- @if($errors->any())
                <div class="alert alert-danger" >
                  <ul>
                    @foreach($errors->all() as $error)
                    <li> {{$error}} </li>
                    @endforeach
                  </ul>
                  
                </div>
                @endif -->
                  <form  id="quickForm" method="post" action="product" enctype="multipart/form-data" >
         
                @csrf
                 <div class="form-group">
                    <label for="exampleInputEmail1">Select Category Name</label>
                   <select name="cat_id"  id="category_id" class="form-control  @error('product_image') is-invalid @enderror"   >
          <option value="">
            Select Category Name
          </option>
            @foreach($lstdata as $list_value)
          <option      value="{{$list_value['id']}}"   {{ old('cat_id', $list_value['category_name'] ) == $list_value['id'] ? 'selected' : '' }} >{{$list_value['product_name']}}</option>
              @endforeach
        </select>
                  </div>
                  @error('cat_id')
                  <div class="alert alert-danger" > {{$message}} </div>
                  @enderror

                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Product Name</label>
                  <input type="text" name="" id="msg" >
                  </div>
                  @error('product_name')
                  <div class="alert alert-danger" > {{$message}} </div>
                  @enderror
                   <!-- <div class="custom-file">
                        <input type="file" class="custom-file-input @error('product_image') is-invalid @enderror"   name="product_image" id="exampleInputFile" value="{{old('product_image')}}" >
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div> -->
               @error('product_image')
                  <div class="alert alert-danger" > {{$message}} </div>
                  @enderror
                 
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
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
<!-- jquery-validation -->
<script src="{{ asset('assets/js/plugins/jquery-validation/jquery.validate.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/jquery-validation/additional-methods.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('assets/css/dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('assets/css/dist/js/demo.js') }}"></script>
<!-- Page specific script -->

<script type="text/javascript">
$("body").on("change","#category_id",function(){
  var category_id = $("#category_id").val();
  $.ajax({
               type:'get',
               url:'/getmsg',
               data:{'_token' : '<?php echo csrf_token() ?>','category_id':+category_id},
                success:function(data) {
                  alert($("#msg").val(data.product_name))
               }
            });

})
</script>

</body>
</html>


