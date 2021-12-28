<header class="header_area">
    <div class="main-menu">
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand text-white" href="/"><img src="{{ asset('frontend/image/icon/logo star1.png') }}" alt=""
                                                                               style="width: 190px;"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

                    <i class="fas fa-align-center" style="color: white"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link text-white" href="/">Trang chủ</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Câu chuyện cà phê</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Trải Nghiệm</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('menu') }}">Thực Đơn</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('news.getnews') }}">Tin tức</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('about') }}">Về Chúng Tôi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('get_cart') }}"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>


</header>
