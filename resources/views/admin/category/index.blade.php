@extends('layouts.admin_include')
   @section('content')
        <!-- body -->
        <div 
          id="datashow" 
          class="col-md-8 d-flex flex-column fs-6 p-3 pt-0"
          
        >

          <div id="table" class="my-2 text-center m-0 p-0">
            <h3 class="text-center m-2">جميع التصنيفات </h3>
            <div 
              class="table-responsive p-0 m-0 my-4 border border-2"
              style="max-height: 300px;"
            >
              <table class="table ">
                  <thead>
                    <tr class="border">
                     
                      <th scope="col">الأيقونة</th>
                      <th scope="col">اسم التصنيف</th>
                      <th scope="col">الإجراء</th>
                     
                    </tr>
                  </thead>
                  <tbody>
                  @foreach ($categories as $category)
							<tr>
						
								<td><img width="50px" src="{{ env('STORAGE_URL') . '/' . $category->image }}" 
								></td>
								<td>{{ $category->name }}</td>
								
                      <td>
                          <a href="/category/{{$category->id}}/edit" class="bg-success px-1 border rounded text-white mx-1">
                              <i class="far fa-edit fa-fw"></i>
                          </a>
                          <a href="/category/delete/{{$category->id}}" class="bg-success px-1 border rounded text-white mx-1">
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
              <a href="/category/create" class="btn btn-success"><i class="fas fa-plus fa-fw"></i> اضاقة تصنيف </a>
            </div>
        </div>
        <!-- body -->

      @endsection