@extends('layouts.admin_include')
@section('content')
        <div 
          id="datashow" 
          class="col-md-8 d-flex flex-column fs-6 p-3 pt-0"
          
        >

          <div id="table" class="my-2 text-center m-0 p-0">
            <h3 class="text-center m-2">جميع المتاجر </h3>
            <div 
              class="table-responsive p-0 m-0 my-4 border border-2"
              style="max-height: 300px;"
            >
              <table class="table ">
                  <thead>
                    <tr class="border">
                      <th scope="col">الشعار</th>
                      <th scope="col">اسم المتجر</th>
                      <th scope="col">التصنيف</th>
                      
                      <th scope="col">التقييم</th>
                      <th scope="col">الاجراء</th>
                     

                    </tr>
                  </thead>
                  <tbody>

                  @foreach ($stores as $store)
							<tr>
						
								<td><img  width="50px" src="{{ env('STORAGE_URL') . '/' . $store->logo }}"
             
								></td>
								<td>{{ $store->name }}</td>
                <td>{{ $store->category->name }}</td>
                <td>
                  @for($x =round($store->ratings->avg('rate'))+1 ; $x <= 5 ; $x++)
                  <i class="fa fa-star" aria-hidden="true" style="color: #9ca2a7;"></i>
                      @endfor
                  @for($x =1 ; $x <= round($store->ratings->avg('rate')) ; $x++)
                  <i class="fa fa-star" aria-hidden="true" style="color: #FFFF00;"></i>     
                      @endfor</td>
								
                      <td>
                          <a href="/store/{{$store->id}}/edit" class="bg-success px-1 border rounded text-white mx-1">
                              <i class="far fa-edit fa-fw"></i>
                          </a>
                          <a href="/store/delete/{{$store->id}}" class="bg-success px-1 border rounded text-white mx-1">
                              <i class="far fa-trash-alt fa-fw"></i>
                          </a>
                          <span></span>
                      </td>
                      </tr>
						@endforeach
                  </tbody>
              </table>
            </div>
          
            <div class="py-5">
              <a href="/store/create" class="btn btn-success"><i class="fas fa-plus fa-fw"></i> اضاقة متجر </a>
            </div>
        </div>
          </div>

        </div>
        @endsection
  