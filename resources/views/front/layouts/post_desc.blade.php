<!DOCTYPE html>
<html lang="zxx">
@include('front.layouts.head')

<body>
<div class="container-scroller">
    <div class="main-panel">
        <!-- partial:partials/_navbar.html -->
        <header id="header">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="navbar-top">
                        <div class="d-flex justify-content-between align-items-center">
                            <ul class="navbar-top-left-menu">
                                <li class="nav-item">
                                    <a href="pages/index-inner.html" class="nav-link">Advertise</a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/aboutus.html" class="nav-link">About</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">Events</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">Write for Us</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">In the Press</a>
                                </li>
                            </ul>
                            <ul class="navbar-top-right-menu">
                                <li class="nav-item">
                                    <a href="#" class="nav-link"><i class="mdi mdi-magnify"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">Login</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">Sign in</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="navbar-bottom">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <a class="navbar-brand" href="#"
                                ><img src="{{asset('front/assets/images/logo.svg')}}" alt=""
                                    /></a>
                            </div>
                            <div>
                                <button
                                    class="navbar-toggler"
                                    type="button"
                                    data-target="#navbarSupportedContent"
                                    aria-controls="navbarSupportedContent"
                                    aria-expanded="false"
                                    aria-label="Toggle navigation"
                                >
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div
                                    class="navbar-collapse justify-content-center collapse"
                                    id="navbarSupportedContent"
                                >
                                    <ul
                                        class="navbar-nav d-lg-flex justify-content-between align-items-center"
                                    >
                                        <li>
                                            <button class="navbar-close">
                                                <i class="mdi mdi-close"></i>
                                            </button>
                                        </li>
                                        <li class="nav-item active">
                                            <a class="nav-link" href="{{route('home')}}">Home</a>
                                        </li>
                                        @foreach($cats as $cat)
                                            <li class="nav-item active">
                                                <a class="nav-link" href="{{route('cats',$cat->id)}}">{{$cat->name}}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <ul class="social-media">
                                <li>
                                    <a href="#">
                                        <i class="mdi mdi-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="mdi mdi-youtube"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="mdi mdi-twitter"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </header>

        <!-- partial -->
        <div class="flash-news-banner">
            <div class="container">
                <div class="d-lg-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center">
                        <span class="badge badge-dark mr-3">Flash news</span>
                        <p class="mb-0">
                            Lorem Ipsum has been the industry's standard dummy text ever
                            since the 1500s.
                        </p>
                    </div>
                    <div class="d-flex">
                        <span class="mr-3 text-danger">Wed, March 4, 2020</span>
                        <span class="text-danger">30??C,London</span>
                    </div>
                </div>
            </div>
        </div>

<!-- Back to top button -->
<div class="back-to-top"></div>



<div class="page-section banner-home bg-image">
    <div class="container py-5 py-lg-0">
        <div class="row align-items-center">
            <div class="col-lg-4 wow zoomIn">
                <div class="img-banner d-none d-lg-block">

                    <img src="{{asset('uploads/'.$post->img)}}" alt="">
                </div>
            </div>
            <div class="col-lg-8 wow fadeInRight">
                <h1 class="font-weight-normal mb-3">{{$post->title}}</h1>
               <p>{{$post->desc}}</p>
            </div>
        </div> <!-- .row -->
    </div> <!-- .container -->
</div> <!-- .banner-home -->

@include('front.layouts.footer')

</body>
</html>
