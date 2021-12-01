<?php

namespace App\Http\Controllers\Dashbord;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;
use App\Models\Store;

use App\Http\Requests\CategoryRequest;
class CategoryController extends Controller

{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {

        return view('dashbord.category.create');
    }



    public function store(CategoryRequest $request)
    {

        $image = $request->file('image');

        $path = 'uploads/images/';
        $image_name = time() + rand(1, 10000000000) . '.' . $image->getClientOriginalExtension();

        Storage::disk('local')->put($path . $image_name, file_get_contents($image));

        $status = Storage::disk('local')->exists($path . $image_name);
        
        $name1 = $request['name'];

        $category = new Category;
        $category->name = $name1;
        $category->image = $path . $image_name;
        $result = $category->save();

        return redirect()->back();
    }


    public function index()
    {
        $categories = Category::all();
    
      return view('dashbord.category.index')->with('categories', $categories);
    }




    public function edit($id)
    {
        $category = Category::where('id', '=', $id)->first();
        
        return view('dashbord.category.edit')->with('category', $category);
    }


    public function update(Request $request, $id)
    {

        $name = $request['name'];
        $image = $request['image'];
        $category = Category::find($id);

        if($image != null){
        $path = 'uploads/images/';
        $image_name = time() + rand(1, 10000000000) . '.' . $image->getClientOriginalExtension();
        Storage::disk('local')->put($path . $image_name, file_get_contents($image));
        $status = Storage::disk('local')->exists($path . $image_name);
        $category->image = $path . $image_name;
        }
       
        
        $category->name = $name;
        $result = $category->save();
        return redirect()->back();
    }


    public function destroy($id)
    {

        $category = Category::find($id);
        $result = $category->delete();
        return redirect()->back();
    }

}
