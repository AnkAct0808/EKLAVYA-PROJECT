@extends('admin.main.layout')
@section('adcontent')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Product Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Product</li>
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
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Edit Product Data Here</h3>
              </div>

              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm" action="{{ route('cat.update', $categaries->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1"> Product Name</label>
                    <input type="text" name="productname" class="form-control" placeholder="productname">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Product category</label>
                    <input type="text" name="productcategory" class="form-control" placeholder="productcategory">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Product  Subcategory</label>
                    <input type="text" name="productsubcategory" class="form-control" placeholder="productsubcategory">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">product Image</label>
                    <input type="file" name="productimage" id="productimage" class="form-control"  value="{{ $categaries->productimage }}"  placeholder="productimage">
                  </div>
                  <br>
                  <img src="{{asset('uploads/image/'.$categaries->image )}}" id="imgprv">
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" name="submit" value="submit" class="btn btn-success">Update</button>
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
  @endsection