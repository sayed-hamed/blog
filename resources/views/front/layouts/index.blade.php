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
                        <span class="text-danger">30°C,London</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-wrapper">
            <div class="container">
                <div class="row" data-aos="fade-up">
                    <div class="col-xl-8 stretch-card grid-margin">
                        <div class="position-relative">
                            <img
                                src="{{asset('front/assets/images/dashboard/'.$post->img)}}"
                                alt="banner"
                                class="img-fluid"/>
                            <div class="banner-content">
                                <div class="badge badge-danger fs-12 font-weight-bold mb-3">
                                    global news
                                </div>
                                <h1 class="mb-0">{{$post->title}}</h1>
                                <h1 class="mb-2">
                                    {{$post->desc}}
                                </h1>
                                <div class="fs-12">
                                    <span class="mr-2">Photo </span>10 Minutes ago
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 stretch-card grid-margin">
                        <div class="card bg-dark text-white">
                            <div class="card-body">
                                <h2>Latest news</h2>

                                @foreach($posts as $post)
                                <div
                                    class="d-flex border-bottom-blue pt-3 pb-4 align-items-center justify-content-between">
                                    <div class="pr-3">
                                        <h5>{{$post->title}}</h5>
                                        <div class="fs-12">
                                            <span class="mr-2">Photo </span>10 Minutes ago
                                        </div>
                                    </div>
                                    <div class="rotate-img">
                                        <img
                                            src="{{asset('front/assets/images/dashboard/'.$post->img)}}"
                                            alt="thumb"
                                            class="img-fluid img-lg"
                                        />
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" data-aos="fade-up">
                    <div class="col-lg-3 stretch-card grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <h2>Category</h2>
                                <ul class="vertical-menu">
                                    @foreach($cats as $cat)
                                    <li><a href="#">{{$cat->name}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 stretch-card grid-margin">
                        <div class="card">
                            <div class="card-body">
                                @foreach($posts as $post)
                                <div class="row">
                                    <div class="col-sm-4 grid-margin">
                                        <div class="position-relative">
                                            <div class="rotate-img">
                                                <img
                                                    src="{{asset('uploads/'.$post->img)}}"
                                                    alt="thumb"
                                                    class="img-fluid"
                                                />
                                            </div>
                                            <div class="badge-positioned">
                            <span class="badge badge-danger font-weight-bold"
                            >Flash news</span
                            >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-8  grid-margin">
                                        <h2 class="mb-2 font-weight-600">
                                            {{$post->title}}
                                        </h2>
                                        <div class="fs-13 mb-2">
                                            <span class="mr-2">Photo </span>10 Minutes ago
                                        </div>
                                        <p class="mb-0">
                                            {{$post->desc}}
                                        </p>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- main-panel ends -->
        <!-- container-scroller ends -->

        <!-- partial:partials/_footer.html -->
@include('front.layouts.footer')
        <!-- partial -->
    </div>
</div>
@include('front.layouts.footer-scripts')
</body>
</html>
