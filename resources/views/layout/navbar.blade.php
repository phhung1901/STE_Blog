<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="index.html">Vegefoods</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
            aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="{{route('blog')}}" class="nav-link">Trang chủ</a></li>
                <li class="nav-item"><a href="{{route('add-blog')}}" class="nav-link">Tạo bài viết</a></li>
                @if (Auth::check())
                    <li class="nav-item active"><a href="#" class="nav-link">{{ Auth::user()->name }}</a></li>
                    <li class="nav-item"><a href="{{ route('logout') }}" class="nav-link">Đăng xuất</a></li>
                @else
                    <li class="nav-item active"><a href="{{route('view.login')}}" class="nav-link">Đăng nhập</a></li>
                    <li class="nav-item"><a href="{{ route('view.register') }}" class="nav-link">Đăng ký</a></li>
                @endif
            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->

<div class="hero-wrap hero-bread" style="background-image: url('images/bg_1.jpg');">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span>
                    <span>Blog</span>
                </p>
                <h1 class="mb-0 bread">Blog</h1>
            </div>
        </div>
    </div>
</div>
