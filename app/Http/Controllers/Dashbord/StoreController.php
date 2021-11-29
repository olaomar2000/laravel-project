<?php

namespace App\Http\Controllers\Dashbord;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Rating;
use Illuminate\Http\Request;
use App\Models\Store;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    public function create()
    {
        $store = Category::get();
        return view('admin.store.create')->with('store', $store);
        
        
    }

    public function store(Request $request)
    {

        $image = $request->file('logo');
        $path = 'uploads/images/store';
        $image_name = time() + rand(1, 10000000000) . '.' . $image->getClientOriginalExtension();
        Storage::disk('local')->put($path . $image_name, file_get_contents($image));
        $status = Storage::disk('local')->exists($path . $image_name);

        $name = $request['name'];
        $address = $request['address'];
        $phone = $request['phone'];
        $category_id = $request['category_id'];


        $store = new Store;
        $store->name = $name;
        $store->address = $address;
        $store->phone = $phone;
        $store->category_id = $category_id;
        $store->logo = $path . $image_name;
        $result = $store->save();

      return redirect()->back();
    }


    public function index()
    {
        $stores = Store::with('ratings')->with('Category')->get();
       
        return view('admin.store.index')->with('stores', $stores);
    }


    public function edit($id)
    {
        $category = Category::get();
        $store = Store::where('id', '=', $id)->first();
        return view('admin.store.edit')->with('store', $store)->with('categories',$category);
    }


    public function update(Request $request, $id)
    {

        $name = $request['name'];
        $logo = $request['logo'];
        $address = $request['address'];
        $phone = $request['phone'];
        $category_id = $request['category_id'];


        $path = 'uploads/images/';
        $image_name = time() + rand(1, 10000000000) . '.' . $logo->getClientOriginalExtension();

        Storage::disk('local')->put($path . $image_name, file_get_contents($logo));

        $status = Storage::disk('local')->exists($path . $image_name);


        $store = Store::find($id);

        $store->name = $name;
        $store->logo = $path . $image_name;;
        $store->address = $address;
        $store->phone = $phone;
        $store->category_id = $category_id;

        $result = $store->save();

        return redirect()->back();
    }

    public function destroy($id)
    {

        $store = Store::find($id);
        $result = $store->delete();
        return redirect()->back();
    }


    public function trind(){

        $start_dt = date('Y-m-d H:i:s');
        $end_dt= date('Y-m-d H:i:s', strtotime($start_dt.' -7 days'));
        $end_dt2= date('Y-m-d H:i:s', strtotime($start_dt.' -14 days'));
        $i=array();
        foreach(Store::all() as $store){
          $num1 =$store->ratings->whereBetween('created_at', [ $start_dt,$end_dt])->avg('rate');
          $num2 =$store->ratings->whereBetween('created_at', [ $end_dt,$end_dt2])->avg('rate');
          $i[]=abs($num2 -$num1);
          
        }
    $i = collect($i)->sortBy('rate');
        
    }

    // public function trinding (){
    //     $last_period = $this->ratings()->where(DB::raw('week(created_at)'),
    //      DB::raw('week(now()) - 1'))->where(DB::raw('dayofweek(created_at)'),
    //       '<=', DB::raw('dayofweek(now())'))->avg('rating');

    //    //  $this_period = $this->ratings()->where(DB::raw('week(created_at)'), DB::raw('week(now())')->avg('rating');
        
    // }

}
