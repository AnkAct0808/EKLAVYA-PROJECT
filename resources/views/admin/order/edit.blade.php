@extends('admin.main.layout')
@section('adcontent')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Order Data</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Order Data</li>
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
                <h3 class="card-title">Edit Order Data Here</h3>
              </div>

              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm" action="{{ route('order.update', $order->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Invoice Number</label>
                    <input type="text" name="invoicenumber" class="form-control" placeholder="invoicenumber">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Order Date</label>
                    <input type="text" name="orderdate" class="form-control" placeholder="orderdate">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">customer</label>
                    <input type="text" name="customer" class="form-control" placeholder="customer">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">order status</label>
                    <input type="text" name="orderstatus" class="form-control" placeholder="orderstatus">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">paid amount</label>
                    <input type="text" name="paidamount" class="form-control" placeholder="paidamount">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Total amount</label>
                    <input type="text" name="totalamount" class="form-control" placeholder="totalamount">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Payment Status</label>
                    <input type="text" name="paymentamount" class="form-control" placeholder="paymentamount">
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