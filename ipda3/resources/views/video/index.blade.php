<!doctype html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="this site for companies">
    <title>site title</title>
    <link rel="icon" href="fav.png">
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
                        <li><a href="{{url(route('pagess.index',2))}}">من نحن</a></li>
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
    <main class="inner-content">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href=""><i class="fa fa-home"></i>الرئيسية</a></li>
                <li>فيديوهات</li>
            </ol>

            @foreach($videos as $video)
            <div class="list-unstyled no-margin clearfix">
                <div class="col-md-3 col-sm-3 col-xs-3">
                    <div class="news-widget">
                        <div class="ih-item square colored effect13 right_to_left">
                            <a href="#">
                                <div class="img">
                                    {!! $video->video !!}

                                </div>
                                <div class="play-icon">
                                    <i class="fa fa-play"></i>
                                </div>
                            </a>
                        </div>
                        <div class="caption">
                            <span>{{$video->title}}</span>
                            <p>{{$video->description}}</p>
                    </div>
                </div>
            </div>
            @endforeach


        </div>
    </main>
    <footer class="main-footer">
        <div class="top-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="footer-logo">
                            <a href=""><img src="{{asset('assets/images/footer-logo.png')}}" class="img-responsive align-center" alt="logo"></a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="footer-links">
                            <ul class="list-unstyled no-margin clearfix">
                                <li class="col-md-6 col-sm-6 col-xs-6">
                                    <a href="{{url(route('/.index'))}}">الرئيسية</a>
                                </li>
                                <li class="col-md-6 col-sm-6 col-xs-6">
                                    <a href="{{url(route('new.index',1))}}">اسكان</a>
                                </li>
                                <li class="col-md-6 col-sm-6 col-xs-6">
                                    <a href="{{url(route('new.index',1))}}">نبذة عن المشروع</a>
                                </li>
                                <li class="col-md-6 col-sm-6 col-xs-6">
                                    <a href="{{url(route('new.index',1))}}">شركات</a>
                                </li>
                                <li class="col-md-6 col-sm-6 col-xs-6">
                                    <a href="{{url(route('pagess.index',1))}}">من نحن</a>
                                </li>
                                <li class="col-md-6 col-sm-6 col-xs-6">
                                    <a href="{{url(route('news.index'))}}">الاخبار</a>
                                </li>
                                <li class="col-md-6 col-sm-6 col-xs-6">
                                    <a href="{{url(route('questions.index'))}}">الاسئلة الشائعة</a>
                                </li>
                                <li class="col-md-6 col-sm-6 col-xs-6">
                                    <a href="{{url(route('register.index'))}}">انضم لفريق العمل</a>
                                </li>
                                <li class="col-md-6 col-sm-6 col-xs-6">
                                    <a href="{{url(route('new.index',2))}}">اراضي</a>
                                </li>
                                <li class="col-md-6 col-sm-6 col-xs-6">
                                    <a href="{{url(route('connects.index'))}}">اتصل بنا</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="follow-us">
                            <h6>تابعنا على :</h6>
                            <a href="" class="fa fa-instagram bg-inverse"></a>
                            <a href="" class="fa fa-youtube yt-bg"></a>
                            <a href="" class="fa fa-linkedin lin-bg"></a>
                            <a href="" class="fa fa-twitter tw-bg"></a>
                            <a href="" class="fa fa-facebook fb-bg"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-footer">
            <a href="https://www.art4muslim.com/" target="_blank">
                تصميم وتطوير شركة
                <img src="{{asset('assets/images/artformuslim-logo.png')}}" class="img-responsive" alt="فن المسلم">
            </a>
        </div>

    </footer>

</section>

<script src="{{asset('assets/js/jquery-1.12.4.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/plugins/owl.carousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/js/scripts.0.0.1.js')}}"></script>
</body>

</html>
