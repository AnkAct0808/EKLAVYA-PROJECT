@extends('admin.main.layout')
@section('adcontent')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Subcategory Data</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Subcategory Data</li>
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
                <h3 class="card-title">Edit Subcategory Data Here</h3>
              </div>

              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm" action="{{ route('childcategory.update', $subcategory->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-body">
                <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  
                  //dropdown
                       <strong>Subcategory:</strong>
                       <select class="form-control" name="subcategory">
                           <option value="None">---SELECT Subcategory---</option>
                           @foreach ($subcat as $temp)
                           <option value="{{ $temp->id }}">{{ $temp->name }}</option>
                               
                           @endforeach
                       </select>
                       //dropdown end
                                    </select>
                                </div>
                            </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">discription </label>
                    <input type="text" name="discription" class="form-control" placeholder="discription">
                  </div>
                  
                 
                  
                  
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