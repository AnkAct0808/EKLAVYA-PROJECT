@extends('admin.main.layout')
@section('adcontent')
<div class="content-wrapper">
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Our Order Data</h3>
          <div class="text-right">
          <button class="pull-right btn-success btn"><a class="text-white" href="{{ route('order.create') }}">ADD categories</a></button>
          </div>
         
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>S.no</th>
              <th>Invoice Number</th>
                <th>Order Date</th>
                <th>Customer</th>
               <th>Order Status</th>
               <th>Paid Amount</th>
               <th>Total Amount</th>
               <th>Payment Status</th>
               <th>Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($order as $key=> $temp )
              <tr>
                <td>{{ ++$key }}</td>
                <td>{{ $temp->invoicenumber }}</td>
                <td>{{ $temp->orderdate }}</td>
                <td>{{ $temp->customer }}</td>
                <td>{{ $temp->orderstatus }}</td>
                <td>{{ $temp->paidamount }}</td>
                <td>{{ $temp->totalamount }}</td>
                <td>{{ $temp->paymentstatus }}</td>
                
                
                <td>
                     <form action="{{ route('order.destroy', $temp->id) }}" method="POST" >
                        <a href="{{ route('order.edit', $temp->id) }}"> <i class="fa fa-cloud"></i></a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" style="border:none"> <i class="fa fa-trash text-danger"></i></button>
                            </form>

                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>
</div>
  @endsection