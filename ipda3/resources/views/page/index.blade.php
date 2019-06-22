<!doctype html>
<html>

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="this site for companies">
  <title>site title</title>
  <link rel="icon" href="{{asset('fav.png')}}">
  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

</head>

<body class="rtl">
  <!--====Start Loading-Page======-->
  <!--<div class="loading-page">
    <div class="spinner">
      <div class="dot1"></div>
      <div class="dot2"></div>
    </div>
  </div>-->
  <!--====End Loading-Page======-->
  <section id="wrapper">
    <header class="main-header">
      <nav class="navbar navbar-default no-radius no-margin main-nav" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
			</button>
            <a href="" class="navbar-brand">
              <img src="{{asset('assets/images/logo.png')}}" class="img-responsive hidden-xs" alt="logo">
              <img src="{{asset('assets/images/mobile-logo.jpg')}}" class="img-responsive visible-xs" alt="logo">
            </a>
          </div>
          <div class="collapse navbar-collapse navbar-ex1-collapse">
              <ul class="nav navbar-nav navbar-right">
                  <li><a href="{{url(route('/.index'))}}">الرئيسية</a></li>
                  <li><a href="{{url(route('new.index',1))}}">نبذة عن المشروع</a></li>
                  <li><a href="{{url(route('pagess.index',1))}}">من نحن</a></li>
                  <li><a href="{{url(route('questions.index'))}}">الاسئلة الشائعة</a></li>
                  <li><a href="{{url(route('new.index',1))}}">اراضي</a></li>
                  <li><a href="{{url(route('new.index',2))}}">اسكان</a></li>
                  <li><a href="{{url(route('new.index',3))}}">شركات</a></li>
                  <li><a href="{{url(route('news.index'))}}">الاخبار</a></li>
                  <li><a href="{{url(route('register.index'))}}">انضم لفريق العمل</a></li>
                  <li><a href="{{url(route('connects.index'))}}">اتصل بنا</a></li>
              </ul>
          </div>
        </div>
      </nav>
    </header>




    <div class="home-news">
      <div class="container">


          <br><br>
        <ul class="list-unstyled no-margin clearfix">



            <div class="home-about">
                <div class="container">
                    <div class="section-title">
                        <img src="{{asset('uploads/'.$page->image)}}" class="img-responsive align-center rounded-circle" alt="icon">
                        <h2>{{$page->title}}</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 col-sm-12">
                            <p> {{$page->contains}}</p>
                        </div>
                    </div>
                </div>
            </div>

        </ul>

      </div>
    </div>
    <div class="add-new-user">
      <div class="container">

      </div>
    </div>




  </section>

  <script src="{{asset('assets/js/jquery-1.12.4.min.js')}}"></script>
  <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('assets/plugins/owl.carousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('assets/js/scripts.0.0.1.js')}}"></script>
</body>

</html>
