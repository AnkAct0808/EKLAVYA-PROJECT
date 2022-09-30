<?php

namespace App\Http\Controllers;
use App\Models\product;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProductController extends Controller

{
    public function index()
    {
        $Product= DB::table('products')->get();
        return view('admin.product.index',compact('Product'));
    }


    public function create()
    {
        return view('admin.product.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'category' => 'required',
            'image'=>'required'
        ]);
    $data = $request->all();
    $result = new product;
   $result->category = $request['category'];
    if ($request->hasfile('image')) {

      $file = $request->file('image');

      $extension = $file->getClientOriginalExtension();

      $filename = time() . '.' . $extension;

      $file->move('uploads/image/', $filename);

      $result->image = $filename;

    }

     $result->save();

        return redirect()->route('product.index')
            ->with('success','Created successfully.');
    }

    public function show()
    {
        
        $Product=product::get();
        return view('product.index',compact('Product'));
    }



    public function update($id,Request $request)
    {
        $result = product::find($id);
        $data = $request->all();
       $result->category = $data['category'];
    if ($request->hasfile('image')) {

      $file = $request->file('image');

      $extension = $file->getClientOriginalExtension();

      $filename = time() . '.' . $extension;

      $file->move('uploads/image/', $filename);

      $result->image = $filename;

    }

     $result->save();

        return redirect()->route('product.index')
            ->with('success','Updated successfully');
    }

    // public function authorize()
    // {
    //     return false;
    // }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    // public function rules()
    // {
    //     $request->validate [(
        
    //       'image' => 'required|image',
    //        )];    
    // }

 

    public function edit($id)
    {
        $Product = product::find($id);
        return view('admin.product.edit',['Product'=> $Product]);
    }
    public function destroy($id)
    {
        $Product=product::find($id);
        $Product->delete();

        return redirect()->route('product.index')
            ->with('success','Deleted successfully');
    }
}