<?php

namespace App\Http\Controllers;
use App\Models\order;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $order= DB::table('orders')->get();
        return view('admin.order.index',compact('order'));
    }


    public function create()
    {
        return view('admin.order.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'invoicenumber' => 'required',
            'orderdate' => 'required',
            'customer' => 'required',
            'orderstatus' => 'required',
            'paidamount' => 'required',
            'totalamount' => 'required',
            'paymentstatus' => 'required',
            
        ]);
    $data = $request->all();
    $result = new order;
   $result->invoicenumber = $data['invoicenumber'];
   $result->orderdate = $data['orderdate'];
   $result->customer = $data['customer'];
   $result->orderstatus = $data['orderstatus'];
   $result->paidamount = $data['paidamount'];
   $result->totalamount = $data['totalamount'];
    $result->paymentstatus = $data['paymentstatus'];
   {

    //   $file = $request->file('image');

    //   $extension = $file->getClientOriginalExtension();

    //   $filename = time() . '.' . $extension;

    //   $file->move('uploads/image/', $filename);

    //   $result->image = $filename;

    }

     $result->save();

        return redirect()->route('order.index')
            ->with('success','Created successfully.');
    }

    public function show()
    {
        //
        $order=order::get();
        return view('admin.order.index',compact('order'));
    }



    public function update($id,Request $request)
    {
        $result = order::find($id);
        $data = $request->all();
        $result->invoicenumber = $data['invoicenumber'];
        $result->orderdate = $data['orderdate'];
        $result->customer = $data['customer'];
        $result->orderstatus = $data['orderstatus'];
        $result->paidamount = $data['paidamount'];
        $result->totalamount = $data['totalamount'];
         $result->paymentstatus = $data['paymentstatus'];
     {

    //   $file = $request->file('image');

    //   $extension = $file->getClientOriginalExtension();

    //   $filename = time() . '.' . $extension;

    //   $file->move('uploads/image/', $filename);

    //   $result->image = $filename;

    }

     $result->save();

        return redirect()->route('order.index')
            ->with('success','Updated successfully');
    }

    public function edit($id)
    {
        $order = order::find($id);
        return view('admin.order.edit',['order'=> $order]);
    }
    public function destroy($id)
    {
        $order=order::find($id);
        $order->delete();

        return redirect()->route('order.index')
            ->with('success','Deleted successfully');
    }
}