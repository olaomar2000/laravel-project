<!doctype html>
<html lang="ar" dir="rtl">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.rtl.min.css" integrity="sha384-mUkCBeyHPdg0tqB6JDd+65Gpw5h/l8DKcCTV2D2UpaMMFd7Jo8A+mDAosaWgFBPl" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">


  <!-- custom css -->
  <link rel="stylesheet" href="{{asset('admin/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('admin/css/vendor.bundle.addons.css')}}">
  <style>
    #dropcontent {
      display: none;
    }

    #dropbtn:hover #dropcontent {
      color: red;
      display: block;
      z-index: 10;
    }
    
      .pagination {
    display: inline-flex;
    padding-right: 0;
    list-style: none;
}

  </style>
  <title>لوحة التحكم</title>
</head>

<body>
  <!--  Nav bar -->
  <nav style="background-color: lightgray;">
    <div class="container d-flex justify-content-between p-2">
      <a href="{{asset('admin/index.html')}}"><img width="30" height="30" src="{{asset('admin/DASHBORRD ICONS/green dashboard.jpeg')}}"> لوحة التحكم</a>
      <a href="/logout"><img width="30" height="30" src="{{asset('admin/DASHBORRD ICONS/LOG OUYT.png')}}"> تسجيل الخروج</a>
    </div>
  </nav>
  <!--  Nav bar -->
  <div class="row add-user" >
			@foreach ($errors->all() as $msg)
				<div class="col-12">
					<div class="alert alert-danger">{{ $msg }}</div>
				</div>
			@endforeach
   
</div>



  <!-- Main body -->
  <div class="container row m-auto d-flex justify-content-between my-4">

    <!-- side bar -->
    <div class="toggle-butt btn btn-success" data-visible="0">
      اظهار الشريط الجانبي
    </div>
    <div id="sidebar" class="col-lg-3 col-md-4 d-flex flex-column fs-5 border border-2 p-3 py-4" style="height: 100%;">
      <div class="p-1">
        <a href="/category/index">
          <img width="25" hieght="25" src="{{asset('admin/DASHBORRD ICONS/SECTIONS 2.jpg')}}">
          التصنيفات
        </a>

      </div>
      <div class="p-1">
        <a href="/store/index">
          <img width="25" hieght="25" src="{{asset('admin/DASHBORRD ICONS/SECTIONS 2.jpg')}}">
          المتاجر
        </a>

      </div>
    </div>
    <!-- side bar -->

    @yield('content')


    
  </div>
  <!-- Main body -->


  <!-- Option 1: Bootstrap Bundle with Popper.js -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

  <script src="{{asset('admin/js/index.js')}}"></script>
  <script src="{{asset('admin/js/form-addons.js')}}"></script>


</body>

</html>

