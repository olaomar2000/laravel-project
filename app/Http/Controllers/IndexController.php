<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Store;

class IndexController extends Controller
{
    
    public function index()
    {
        return view('store.index')->with('categories',Category::all());
    }

    public function stores($id)
    {
        return view('store.store')->with('category',Category::find($id));
    }
    public function details($id){
        return view('store.storeDetails')->with('store',Store::find($id));
    }


    
    public function search(Request $request)
    {
        $search = $request->search;
        $store = Store::all();

        $filtered = $store->filter(function ($item) use ($search) {

            return stripos($item['name'], $search) !== false;
            return $item->name === $search; //search must be exactly word

        });
        return view('store.search')->with('store', $filtered);
    }

}
