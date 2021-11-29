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

  <title>STORES</title>


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


  <!-- product section -->

  <section class="product_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          {{$category->name}}
        </h2>
      </div>
      <div class="row">
        @foreach($category->stores as $store)
        <div class="col-sm-6 col-lg-4">
          <div class="box">
            <div class="img-box">
              <img src="{{ env('STORAGE_URL') . '/' . $store->logo }}" alt="">
              <a href="/details/{{$store->id}}" class="add_cart_btn">
                <span>
                  View details
                </span>
              </a>
            </div>
            <div class="detail-box">
              <h5>
                {{$store->name}}
              </h5>
              <div class="product_info">

                <div class="star_container">


                  @for($x =1 ; $x <= round($store->ratings->avg('rate')) ; $x++)
                    <i class="fa fa-star" aria-hidden="true" style="color: #FFFF00;"></i>

                    @endfor

                    @for($x =round($store->ratings->avg('rate'))+1 ; $x <= 5 ; $x++) 
                    <i class="fa fa-star" aria-hidden="true" style="color: #9ca2a7;"></i>
                      @endfor
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach

      </div>
  </section>

  <!-- end product section -->


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