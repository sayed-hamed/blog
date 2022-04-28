
<!DOCTYPE html>
<html lang="zxx">
@include('front.layouts.head')

<body>
<div class="container-scroller">
    <div class="main-panel">
        <!-- partial:../partials/_navbar.html -->
        <header id="header">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="navbar-top">
                        <div class="d-flex justify-content-between align-items-center">

                        </div>
                    </div>
                    <div class="navbar-bottom">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <a class="navbar-brand" href="#"
                                ><img src="{{asset('front/../assets/images/logo.svg')}}" alt=""
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


                                        <li class="nav-item">
                                            <a class="nav-link" href="./contactus.html">Contact</a>
                                        </li>
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
                <div class="col-sm-12">
                    <div class="card" data-aos="fade-up">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h1 class="font-weight-600 mb-4">
                                        {{$cat->name}}
                                    </h1>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-8">
                                    @foreach($posts as $post)
                                    <div class="row">
                                        <div class="col-sm-4 grid-margin">
                                            <div class="rotate-img">
                                                <a href="{{route('post',$post->id)}}">
                                                <img
                                                    src="{{asset('uploads/'.$post->img)}}"
                                                    alt="banner"
                                                    class="img-fluid"
                                                />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-sm-8 grid-margin">
                                            <a href="{{route('post',$post->id)}}">
                                            <h2 class="font-weight-600 mb-2">
                                                {{$post->title}}
                                            </h2>
                                            </a>
                                            <p class="fs-13 text-muted mb-0">
                                                <span class="mr-2">Photo </span>10 Minutes ago
                                            </p>
                                            <p class="fs-15">
                                                {{$post->desc}}
                                            </p>
                                        </div>
                                    </div>
                                    @endforeach

                                </div>
                                <div class="col-lg-4">
                                    <h2 class="mb-4 text-primary font-weight-600">
                                        Latest news
                                    </h2>
                                    @foreach($pos as $cat)
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="border-bottom pb-4 pt-4">
                                                <div class="row">
                                                    <div class="col-sm-8">
                                                        <a href="{{route('post',$cat->id)}}">
                                                        <h5 class="font-weight-600 mb-1">
                                                            {{$cat->title}}
                                                        </h5>
                                                        </a>
                                                        <p class="fs-13 text-muted mb-0">
                                                            <span class="mr-2">Photo </span>10 Minutes ago
                                                        </p>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <a href="{{route('post',$cat->id)}}">
                                                        <div class="rotate-img">
                                                            <img
                                                                src="{{asset('uploads/'.$cat->img)}}" alt="banner" class="img-fluid"/>
                                                        </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    <div class="trending">
                                        <h2 class="mb-4 text-primary font-weight-600">
                                            Trending
                                        </h2>
                                        @foreach($pos as $p)
                                        <div class="mb-4">
                                            <a href="{{route('post',$p->id)}}">
                                            <div class="rotate-img">
                                                <img
                                                    src="{{asset('uploads/'.$p->img)}}"
                                                    alt="banner"
                                                    class="img-fluid"
                                                />
                                            </div>
                                            </a>
                                            <a href="{{route('post',$p->id)}}">
                                            <h3 class="mt-3 font-weight-600">
                                                {{$p->title}}
                                            </h3>
                                            </a>
                                            <p class="fs-13 text-muted mb-0">
                                                <span class="mr-2">Photo </span>10 Minutes ago
                                            </p>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>@include('front.layouts.footer-scripts')

@include('front.layouts.footer')

</body>
</html>
