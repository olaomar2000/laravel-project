@extends('layouts.admin_include')
@section('content')
<!-- body -->
<div id="datashow" class="col-md-8 d-flex flex-column fs-6 border border-2">
    <div class="row add-user" style="background-color: lightgray;">
        <h4 class="p-4">تعديل متجر </h4>
        <form action="{{URL('store/update/' . $store->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="col-md-6 d-flex p-3">
                <p class="mx-1" style="padding-left: 40px;"> اسم المتجر </p>
                <input type="text" class="form-control" value="{{ $store->name }}" style="width:60%;">
            </div>
            <div class="col-md-6 d-flex p-3">
                <p class="mx-1" style="padding-left: 17px;"> الفئة </p>
                <select name="category_id" class="form-control" style="width:60%;">

                   

                    @foreach ($categories as $category)
								@if ($category->id = $store->category_id)
									<option value="{{ $category->id }}" selected>{{ $category->name }}</option>
								@else
									<option value="{{ $category->id }}">{{ $category->name }}</option>
								@endif
							@endforeach


                </select>
            </div>

            <div class="col-md-6 d-flex p-3">
                <p class="mx-1"> صورة المتجر </p>
                <input type="file" name="image" class="form-control" style="width:60%;">
            </div>
            <div class="col-md-6 d-flex p-3">
                <p class="mx-1"> رقم الهاتف </p>
                <input type="text" class="form-control"value="{{ $store->phone }}" style="width:60%;">
            </div>
            <div class="col-md-6 d-flex p-3">
                <p class="mx-1"> العنوان</p>
                <input type="text" class="form-control"value="{{ $store->address }}" style="width:60%;">
            </div>


            <div class="d-flex my-5 justify-content-around">
                <button type="submit"><span class="btn text-white bg-success"> تعديل <i class="text-white fab fa-telegram-plane fa-fw"></i></span>
                </button>

            </div>
        </form>
    </div>
    <!-- body -->


</div>
<!-- body -->
@endsection