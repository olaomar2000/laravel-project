<?php

namespace App\Http\Controllers\Website;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Store;
use App\Http\Controllers\Controller;
class IndexController extends Controller
{
    
    public function index()
    {
        $category = Category::paginate(3);
        return view('website.index')->with('categories',$category);
    }

    public function stores($id)
    {
        return view('website.store')->with('category',Category::find($id));
    }
    public function details($id){
        return view('website.storeDetails')->with('store',Store::find($id));
    }


    
    public function search(Request $request)
    {
        $search = $request->search;
        $store = Store::all();

        $filtered = $store->filter(function ($item) use ($search) {

            return stripos($item['name'], $search) !== false;
            return $item->name === $search; 

        });
        return view('website.search')->with('store', $filtered);
    }

}
