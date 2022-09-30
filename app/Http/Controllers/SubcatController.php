<?php

namespace App\Http\Controllers;
use App\Models\Subcat;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SubcatController extends Controller
{
    public function index()
    {
        $subcat= DB::table('subcats')->get();
        return view('admin.Subcategory.index',compact('subcat'));
    }


    public function create()      //dropdown method
    {
        $subcat = Subcat::all();
        
        return view('admin.Subcategory.add',compact('subcat',));
        
    }

    public function store(Request $request)
    {
        $request->validate([
            'category' => 'required',
            'discription'=>'required'
        ]);
    $data = $request->all();
    $result = new Subcat;
   $result->subcategory = $request['category'];
   $result->discription = $request['discription'];
     {

    //   $file = $request->file('image');

    //   $extension = $file->getClientOriginalExtension();

    //   $filename = time() . '.' . $extension;

    //   $file->move('uploads/image/', $filename);

    //   $result->image = $filename;

    }

     $result->save();

        return redirect()->route('childcategory.index')
            ->with('success','Created successfully.');
    }

    public function show()
    {
        
        $subcat=Subcat::get();
        return view('admin.Subcategory.index',compact('subcat'));
    }



    public function update($id,Request $request)
    {
        $result = Subcat::find($id);
        $data = $request->all();
       $result->subcategory = $data['subcategory'];
       $result->discription = $data['discription'];
     {

    //   $file = $request->file('image');

    //   $extension = $file->getClientOriginalExtension();

    //   $filename = time() . '.' . $extension;

    //   $file->move('uploads/image/', $filename);

    //   $result->image = $filename;

    }

     $result->save();

        return redirect()->route('childcategory.index')
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
        $subcat = Subcat::find($id);
        return view('admin.Subcategory.edit',['subcat'=> $subcat]);
    }
    public function destroy($id)
    {
        $subcat=Subcat::find($id);
        $subcat->delete();

        return redirect()->route('childcategory.index')
            ->with('success','Deleted successfully');
    }
}
