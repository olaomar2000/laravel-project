@extends('layouts.admin_include')
@section('content')
<!-- body -->


<div id="datashow" class="col-md-8 d-flex flex-column fs-6 border border-2">
  <div class="row add-user" style="background-color: lightgray;">
    <h4 class="p-4">اضافة تصنيف</h4>
    <form action="{{url('category/store')}}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="col-md-6 d-flex p-3">

        <p class="mx-1" style="padding-left: 40px;"> اسم التصنيف </p>
        <input type="text" name="name" class="form-control" style="width:60%;">
      </div>

      <div class="col-md-6 d-flex p-3">
        <p class="mx-1"> صورة التصنيف </p>
        <input type="file" name="image" class="form-control" style="width:60%;">
      </div>

      <div class="d-flex my-5 justify-content-around">
       <button type="submit"><span class="btn text-white bg-success"> انشاء <i class="text-white fab fa-telegram-plane fa-fw"></i></span>
        </button>
      </div>
    </form>
  </div>

</div>

<!-- body -->
@endsection