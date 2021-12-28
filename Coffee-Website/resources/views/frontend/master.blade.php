@include("frontend.layouts.head")

<body>
<!--  ======================= Start Header Area ============================== -->
<!--  ======================= End Header Area ============================== -->
@include("frontend.layouts.header")

<!-- <header class="header">
  <div class="container navbar">
    <div class="row v-center">
      <div class="header-item item-left">
        <div class="logo">
          <a href="#">
            <img src="image/icon/logo star1.png" alt="" width="120px">
          </a>
        </div>
      </div>

      <div class="header-item item-center">
        <div class="menu-overlay">
        </div>
        <nav class="menu">
          <div class="mobile-menu-head">
            <div class="go-back"><i class="fa fa-angle-left"></i></div>
            <div class="current-menu-title"></div>
            <div class="mobile-menu-close">&times;</div>
          </div>
          <ul class="menu-main ">
            <li class="menu-item-has-children">
              <a class="nav-link text-white" href="homeCoffee.html">Trang chủ</a>

            </li>
            <li class="menu-item-has-children">
              <a class="nav-link text-white" href="#">Câu chuyện cà phê</a>

            </li>
            <li class="menu-item-has-children">
              <a class="nav-link text-white" href="#">Trải Nghiệm</a>

            </li>
            <li class="menu-item-has-children">
              <a class="nav-link text-white" href="menuCoffee.html">Thực Đơn</a>


            </li>
            <li class="menu-item-has-children">
              <a class="nav-link text-white" href="new.html">Tin tức</a>

            </li>
            <li class="menu-item-has-children">
              <a class="nav-link text-white" href="aboutMe.html">Về Chúng Tôi</a>

            </li>
          </ul>
        </nav>
      </div>

      <div class="header-item item-right">
        <a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
        <a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a>
        <a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
        <a href="#"><i class="fa fa-user-circle" aria-hidden="true"></i></a>

        <div class="mobile-menu-trigger">
          <span></span>
        </div>
      </div>
    </div>
  </div>
</header> -->
<!--  ======================= Start Main Area ============================== -->
<main class="site_main_area">
    @yield('content')
    <!--  ======================= End Blog Area ============================== -->
</main>
<!--  ======================= End Main Area ============================== -->

<!--  ======================= Start Footer Area ============================== -->

@include("frontend.layouts.footer")
