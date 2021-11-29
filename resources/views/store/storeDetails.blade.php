<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <link rel="icon" href="{{asset('store/images/laravellogo.png')}}" type="image/gif" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Details</title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{{asset('store/css/bootstrap.css')}}" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet"> <!-- range slider -->

  <!-- font awesome style -->
  <link href="{{asset('store/css/font-awesome.min.css')}}" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="{{asset('store/css/style.css')}}" rel="stylesheet" />
  <!-- responsive style -->
  <link href="{{asset('store/css/responsive.css')}}" rel="stylesheet" />

</head>

<body class="sub_page">

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="header_top">
        <div class="container-fluid">
          <div class="top_nav_container">
            <div class="contact_nav">

              <a href="/index">

                <span>
                  FINAL PROJECT LARAVEL
                </span>
              </a>
            </div>


          </div>

        </div>
      </div>

    </header>
    <!-- end header section -->
  </div>

  <!-- about section -->

  <section class="about_section">
    <div class="container-fluid  ">
      <div class="row">
        <div class="col-md-6 px-0">
          <div class="img-box">
            <img width="150 px" src="{{ env('STORAGE_URL') . '/' . $store->logo }}" alt="">
          </div>
        </div>
        <div class="col-md-5 ml-auto">
          <div class="detail-box pr-md-3">
            <div class="heading_container">
              <h2>
                {{$store->name}}
              </h2>

              <p> {{$store->address}} </p>
              <p> {{$store->phone}} </p>

              <!-- @foreach($store->ratings as $mac)
              @if($mac->mac_address != exec('getmac')) -->
              <form action="{{url('rate/' . $store->id)}}" method="POST">
                @csrf
                <div class="container d-flex justify-content-center mt-5">
                  <div class="card text-center mb-5">
                    <div class="rate bg-success py-3 text-white mt-3">
                      <h6 class="mb-0">Rate {{$store->name}}</h6>
                      <div class="rating">
                        <input type="radio" name="rating" value="5" id="5"><label for="5">☆</label>
                        <input type="radio" name="rating" value="4" id="4"><label for="4">☆</label>
                        <input type="radio" name="rating" value="3" id="3"><label for="3">☆</label>
                        <input type="radio" name="rating" value="2" id="2"><label for="2">☆</label>
                        <input type="radio" name="rating" value="1" id="1"><label for="1">☆</label>
                      </div>
                      <div class="buttons px-4 mt-0">
                        <button class="btn btn-warning btn-block rating-submit">Rate</button>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
              
              <!-- @endif

              @endforeach -->
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- end about section -->

  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span> All Rights Reserved By
        <a href="https://html.design/">Free Html Templates</a>
      </p>
    </div>
  </footer>
  <!-- footer section -->

  <!-- jQery -->
  <script src="{{asset('store/js/jquery-3.4.1.min.js')}}"></script>
  <!-- bootstrap js -->
  <script src="{{asset('store/js/bootstrap.js')}}"></script>
  <!-- custom js -->
  <script src="{{asset('store/js/custom.js')}}"></script>
</body>

</html>