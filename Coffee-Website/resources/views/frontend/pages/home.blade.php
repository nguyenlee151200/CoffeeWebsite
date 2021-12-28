@extends('frontend.master')
@section('content')
        <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/style.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/pay.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/menu.css') }}">


        <section class="slide_area">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{ asset('frontend/image/img/home-1-slider-img-2.jpg')}}" alt="First slide">
                    <div class="carousel-caption">
                        <img  src="{{ asset('frontend/image/icon/icon slide.png')}}" alt="">
                        <h1 class="title-h1 text-uppercase wow slideInLeft">The coffee's house</h1>
                        <p class="line wow lightSpeedIn">Ngôi nhà của chúng tôi bắt nguồn từ vùng đất Tây Nguyên đầy nắng và gió</p>
                        <button class="btn primary-button text-uppercase wow bounceInUp">Work with us!</button>
                    </div>
                </div>
                <!-- <div class="carousel-item">
                  <img class="d-block w-100" src="image/img/home-1-slider-img-2.jpg" alt="Second slide">
                  <div class="carousel-caption d-none d-md-block">

                  </div>
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="image/img/home-1-slider-img-2.jpg" alt="Third slide">
                  <div class="carousel-caption d-none d-md-block">

                  </div>
                </div> -->
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
    <!--  ======================= Start Service Area ============================== -->
    <section class="service_area">
        <div class="container">
            <div class="row justify-content-center text-center pt-5">
                <div class="col-md-8 col-12 ">
                    <p class="line">What Happens Here?</p>
                    <h3 class="title-text text-uppercase wow bounceIn">Services we provide</h3>
                </div>
            </div>
            <div class="row list-strong">
                <div class="col-md-4 col-12">
                    <img src="{{ asset('frontend/image/img/demo1.jpg')}}" alt="">
                    <div class="row">
                        <div class="col-3">01</div>
                        <div class="col-9">Beautiful place</div>
                    </div>
                    <div class="para">Alienum phaedrum to rquatos mort eu, vis detraxit periculis ex, nihil expetendis in mei.
                        Mei an pericula euripidis, hinc partem ei est. Eos ei nisl graecis, vix apeririequat an. Eius lorem
                        tincidunt vix atle.

                    </div>
                    <div class="read_more">
                        <a href="">read more <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <img src="{{ asset('frontend/image/img/demo1.jpg')}}" alt="">
                    <div class="row">
                        <div class="col-3">01</div>
                        <div class="col-9">full taste</div>
                    </div>
                    <div class="para">Alienum phaedrum to rquatos mort eu, vis detraxit periculis ex, nihil expetendis in mei.
                        Mei an pericula euripidis, hinc partem ei est. Eos ei nisl graecis, vix apeririequat an. Eius lorem
                        tincidunt vix atle.

                    </div>
                    <div class="read_more">
                        <a href="">read more <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <img src="{{ asset('frontend/image/img/demo1.jpg')}}" alt="">
                    <div class="row">
                        <div class="col-3">01</div>
                        <div class="col-9">full taste</div>
                    </div>
                    <div class="para">Alienum phaedrum to rquatos mort eu, vis detraxit periculis ex, nihil expetendis in mei.
                        Mei an pericula euripidis, hinc partem ei est. Eos ei nisl graecis, vix apeririequat an. Eius lorem
                        tincidunt vix atle.

                    </div>
                    <div class="read_more">
                        <a href="">read more <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  ======================= End Service Area ============================== -->

    <!--  ======================= Start App Area ============================== -->
    <section class="about_area">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-3">
                    <img src="{{ asset('frontend/image/icon/home-1-img-6.png')}}" alt="">
                </div>
                <div class="col-md-6 col-9 text-left" style="color: #ffffff">
                    <p class="line">What Happens Here?</p>
                    <h3 class="title-text text-uppercase wow bounceIn">Services we provide</h3>
                    <div class="para">Alienum phaedrum to rquatos mort eu, vis detraxit periculis ex, nihil expetendis in mei.
                        Mei an pericula euripidis, hinc partem ei est. Eos ei nisl graecis, vix apeririequat an. Eius lorem
                        tincidunt vix atle.

                    </div>
                    <button class="btn primary-button text-uppercase wow bounceInUp">Work with us!</button>
                </div>
            </div>
        </div>
    </section>
    <!--  ======================= End About Area ============================== -->

    <!--  ======================= Start Try Coffee Area ============================== -->
    <section class="try_coffee_area">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-3 col-sm-6 col-12">
                    <img src="{{ asset('frontend/image/icon/1.png')}}" alt="">
                    <div class="para">Alienum phaedrum to rquatos mort eu, vis detraxit periculis ex, nihil expetendis in mei.
                        Mei an pericula euripidis, hinc partem ei est. Eos ei nisl graecis, vix apeririequat an. Eius lorem
                        tincidunt vix atle.

                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-12">
                    <img src="{{ asset('frontend/image/icon/2.png')}}" alt="">
                    <div class="para">Alienum phaedrum to rquatos mort eu, vis detraxit periculis ex, nihil expetendis in mei.
                        Mei an pericula euripidis, hinc partem ei est. Eos ei nisl graecis, vix apeririequat an. Eius lorem
                        tincidunt vix atle.

                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-12">
                    <img src="{{ asset('frontend/image/icon/3.png')}}" alt="">
                    <div class="para">Alienum phaedrum to rquatos mort eu, vis detraxit periculis ex, nihil expetendis in mei.
                        Mei an pericula euripidis, hinc partem ei est. Eos ei nisl graecis, vix apeririequat an. Eius lorem
                        tincidunt vix atle.

                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-12">
                    <img src="{{ asset('frontend/image/icon/4.png')}}" alt="">
                    <div class="para">Alienum phaedrum to rquatos mort eu, vis detraxit periculis ex, nihil expetendis in mei.
                        Mei an pericula euripidis, hinc partem ei est. Eos ei nisl graecis, vix apeririequat an. Eius lorem
                        tincidunt vix atle.

                    </div>
                </div>
            </div>
            <div class="row bot text-left">
                <div class="col-sm-6 col-12">
                    <img class="bgrh" src="{{ asset('frontend/image/img/hat.jpg')}}" alt="">
                    <div class="bgr">
                        <h3>Try the best coffee in the city</h3>
                        <div class="para">Alienum phaedrum to rquatos mort eu, vis detraxit periculis ex, nihil expetendis in mei.
                            Mei an pericula euripidis, hinc partem ei est. Eos ei nisl graecis, vix apeririequat an. Eius lorem
                            tincidunt vix atle.
                        </div>
                        <div class="read_more">
                            <a href="">read more <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-12 right1">
                    <img src="{{ asset('frontend/image/img/main-home-project-pres-1.jpg')}}" alt="">
                </div>
            </div>
        </div>
    </section>
    <!--  ======================= End Try Coffee Area ============================== -->

    <!--  ======================= Start Wet Menu Area ============================== -->
    <section class="wet_menu_area">
        <div class="container">
            <div class="row justify-content-center text-center pt-5">
                <div class="col-md-8 col-12 ">
                    <p class="line">What Happens Here?</p>
                    <h3 class="title-text text-uppercase wow bounceIn">Services we provide</h3>
                </div>
            </div>
            <div class="row menu_list" id="list-menu-temp">
                <div class="row">
                    <div class="col-sm-6 col-12">
                        <a href="pay.html">
                            <div class="row" id="product-item-temp">
                                <div class="col-2">
                                    <img src="{{ asset('frontend/image/img/coffee1.jpg')}}" alt="" width="100%">
                                </div>
                                <div class="col-8">
                                    <h4>Cafe late</h4>
                                    <span>Fresh brewed coffee and steamed milk</span>
                                </div>
                                <div class="col-2">
                                    $42.5
                                </div>
                            </div>
                        </a>
                        <a href="">
                            <div class="row">
                                <div class="col-2">
                                    <img src="{{ asset('frontend/image/img/coffee1.jpg')}}" alt="" width="100%">
                                </div>
                                <div class="col-8">
                                    <h4>Cafe late</h4>
                                    <span>Fresh brewed coffee and steamed milk</span>
                                </div>
                                <div class="col-2">
                                    $42.5
                                </div>
                            </div>
                        </a>
                        <a href="">
                            <div class="row">
                                <div class="col-2">
                                    <img src="{{ asset('frontend/image/img/coffee1.jpg')}}" alt="" width="100%">
                                </div>
                                <div class="col-8">
                                    <h4>Cafe late</h4>
                                    <span>Fresh brewed coffee and steamed milk</span>
                                </div>
                                <div class="col-2">
                                    $42.5
                                </div>
                            </div>
                        </a>
                        <a href="">
                            <div class="row">
                                <div class="col-2">
                                    <img src="{{ asset('frontend/image/img/coffee1.jpg')}}" alt="" width="100%">
                                </div>
                                <div class="col-8">
                                    <h4>Cafe late</h4>
                                    <span>Fresh brewed coffee and steamed milk</span>
                                </div>
                                <div class="col-2">
                                    $42.5
                                </div>
                            </div>
                        </a>
                        <a href="">
                            <div class="row">
                                <div class="col-2">
                                    <img src="{{ asset('frontend/image/img/coffee1.jpg')}}" alt="" width="100%">
                                </div>
                                <div class="col-8">
                                    <h4>Cafe late</h4>
                                    <span>Fresh brewed coffee and steamed milk</span>
                                </div>
                                <div class="col-2">
                                    $42.5
                                </div>
                            </div>
                        </a>
                        <a href="">
                            <div class="row">
                                <div class="col-2">
                                    <img src="{{ asset('frontend/image/img/coffee1.jpg')}}" alt="" width="100%">
                                </div>
                                <div class="col-8">
                                    <h4>Cafe late</h4>
                                    <span>Fresh brewed coffee and steamed milk</span>
                                </div>
                                <div class="col-2">
                                    $42.5
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-12">
                        <a href="">
                            <div class="row">
                                <div class="col-2">
                                    <img src="{{ asset('frontend/image/img/coffee1.jpg')}}" alt="" width="100%">
                                </div>
                                <div class="col-8">
                                    <h4>Cafe late</h4>
                                    <span>Fresh brewed coffee and steamed milk</span>
                                </div>
                                <div class="col-2">
                                    $42.5
                                </div>
                            </div>
                        </a>
                        <a href="">
                            <div class="row">
                                <div class="col-2">
                                    <img src="{{ asset('frontend/image/img/coffee1.jpg')}}" alt="" width="100%">
                                </div>
                                <div class="col-8">
                                    <h4>Cafe late</h4>
                                    <span>Fresh brewed coffee and steamed milk</span>
                                </div>
                                <div class="col-2">
                                    $42.5
                                </div>
                            </div>
                        </a>
                        <a href="">
                            <div class="row">
                                <div class="col-2">
                                    <img src="{{ asset('frontend/image/img/coffee1.jpg')}}" alt="" width="100%">
                                </div>
                                <div class="col-8">
                                    <h4>Cafe late</h4>
                                    <span>Fresh brewed coffee and steamed milk</span>
                                </div>
                                <div class="col-2">
                                    $42.5
                                </div>
                            </div>
                        </a>
                        <a href="">
                            <div class="row">
                                <div class="col-2">
                                    <img src="{{ asset('frontend/image/img/coffee1.jpg')}}" alt="" width="100%">
                                </div>
                                <div class="col-8">
                                    <h4>Cafe late</h4>
                                    <span>Fresh brewed coffee and steamed milk</span>
                                </div>
                                <div class="col-2">
                                    $42.5
                                </div>
                            </div>
                        </a>
                        <a href="">
                            <div class="row">
                                <div class="col-2">
                                    <img src="{{ asset('frontend/image/img/coffee1.jpg')}}" alt="" width="100%">
                                </div>
                                <div class="col-8">
                                    <h4>Cafe late</h4>
                                    <span>Fresh brewed coffee and steamed milk</span>
                                </div>
                                <div class="col-2">
                                    $42.5
                                </div>
                            </div>
                        </a>
                        <a href="">
                            <div class="row">
                                <div class="col-2">
                                    <img src="{{ asset('frontend/image/img/coffee1.jpg')}}" alt="" width="100%">
                                </div>
                                <div class="col-8">
                                    <h4>Cafe late</h4>
                                    <span>Fresh brewed coffee and steamed milk</span>
                                </div>
                                <div class="col-2">
                                    $42.5
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <button class="btn primary-button text-uppercase wow bounceInUp">Work with us!</button>
            </div>
        </div>
    </section>
    <!--  ======================= End Wet Menu Area ============================== -->

    <!--  ======================= Start Dry Menu Area ============================== -->
    <section class="dry_menu_area">
        <div class="container">
            <div class="row justify-content-center text-center pt-5">
                <div class="col-md-8 col-12 ">
                    <p class="line">What Happens Here?</p>
                    <h3 class="title-text text-uppercase wow bounceIn">Services we provide</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6 col-12">
                    <img src="{{ asset('frontend/image/img/4b40f91038ffc7a19eee.jpg')}}" alt="">
                    <ul class="rating">
                        <li class="rating-item" data-rate="1"></li>
                        <li class="rating-item active" data-rate="2"></li>
                        <li class="rating-item" data-rate="3"></li>
                        <li class="rating-item" data-rate="4"></li>
                        <li class="rating-item" data-rate="5"></li>
                    </ul>
                    <a href="">$46.00</a>
                </div>
                <div class="col-md-3 col-sm-6 col-12">
                    <img src="{{ asset('frontend/image/img/4b40f91038ffc7a19eee.jpg')}}" alt="">
                    <ul class="rating">
                        <li class="rating-item" data-rate="1"></li>
                        <li class="rating-item active" data-rate="2"></li>
                        <li class="rating-item" data-rate="3"></li>
                        <li class="rating-item" data-rate="4"></li>
                        <li class="rating-item" data-rate="5"></li>
                    </ul>
                    <a href="">$46.00</a>
                </div>
                <div class="col-md-3 col-sm-6 col-12">
                    <img src="{{ asset('frontend/image/img/4b40f91038ffc7a19eee.jpg')}}" alt="">
                    <ul class="rating">
                        <li class="rating-item" data-rate="1"></li>
                        <li class="rating-item active" data-rate="2"></li>
                        <li class="rating-item" data-rate="3"></li>
                        <li class="rating-item" data-rate="4"></li>
                        <li class="rating-item" data-rate="5"></li>
                    </ul>
                    <a href="">$46.00</a>
                </div>
                <div class="col-md-3 col-sm-6 col-12">
                    <img src="{{ asset('frontend/image/img/4b40f91038ffc7a19eee.jpg')}}" alt="">
                    <ul class="rating">
                        <li class="rating-item" data-rate="1"></li>
                        <li class="rating-item active" data-rate="2"></li>
                        <li class="rating-item" data-rate="3"></li>
                        <li class="rating-item" data-rate="4"></li>
                        <li class="rating-item" data-rate="5"></li>
                    </ul>
                    <a href="">$46.00</a>
                </div>
            </div>
        </div>
    </section>
    <!--  ======================= End Dry Menu Area ============================== -->

    <!--  ======================= Start Image Area ============================== -->
    <section class="image_area pt-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-7 col-12">
                    <div class="row">
                        <div class="col-md-8 col-12">
                            <img src="{{ asset('frontend/image/img/home-1-gallery-1.jpg') }}" alt="">
                        </div>
                        <div class="col-md-4 col-12">
                            <div class="row">
                                <div class="col-12">
                                    <img src="{{ asset("frontend/image/img/home-1-gallery-2-550x550.jpg") }}" alt="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <img src="{{ asset("frontend/image/img/home-1-gallery-2-550x550.jpg") }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-12">
                    <div class="row">
                        <div class="col-md-7 col-12">
                            <img src="{{ asset("frontend/image/img/home-1-gallery-4-500x1000.jpg") }}" alt="">
                        </div>
                        <div class="col-md-5 col-12">
                            <div class="row">
                                <div class="col-12">
                                    <img src="{{ asset("frontend/image/img/home-1-gallery-3-550x550.jpg") }}" alt="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <img src="{{ asset("frontend/image/img/home-1-gallery-2-550x550.jpg") }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  ======================= End Image Area ============================== -->

    <!--  ======================= Start Blog Area ============================== -->
    <section class="blog_area">
        <div class="container">
            <div class="row justify-content-center text-center pt-5">
                <div class="col-md-8 col-12 ">
                    <p class="line">What Happens Here?</p>
                    <h3 class="title-text text-uppercase wow bounceIn">Services we provide</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-12">
                    <img src="{{ asset('frontend/image/img/demo1.jpg') }}" alt="">
                    <h4>Make it simple</h4>
                    <span>by Jane Doe / Competition / 23.02.2016</span>
                    <div class="para">Alienum phaedrum to rquatos mort eu, vis detraxit periculis ex, nihil expetendis in mei.
                        Mei an pericula euripidis, hinc partem ei est. Eos ei nisl graecis, vix apeririequat an. Eius lorem
                        tincidunt vix atle.

                    </div>
                    <div class="read_more">
                        <a href="">read more <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <img src="{{ asset('frontend/image/img/demo1.jpg') }}" alt="">
                    <h4>Make it simple</h4>
                    <span>by Jane Doe / Competition / 23.02.2016</span>
                    <div class="para">Alienum phaedrum to rquatos mort eu, vis detraxit periculis ex, nihil expetendis in mei.
                        Mei an pericula euripidis, hinc partem ei est. Eos ei nisl graecis, vix apeririequat an. Eius lorem
                        tincidunt vix atle.</div>
                    <div class="read_more">
                        <a href="">read more <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <img src="{{ asset('frontend/image/img/demo1.jpg') }}" alt="">
                    <h4>Make it simple</h4>
                    <span>by Jane Doe / Competition / 23.02.2016</span>
                    <div class="para">Alienum phaedrum to rquatos mort eu, vis detraxit periculis ex, nihil expetendis in mei.
                        Mei an pericula euripidis, hinc partem ei est. Eos ei nisl graecis, vix apeririequat an. Eius lorem
                        tincidunt vix atle.</div>
                    <div class="read_more">
                        <a href="">read more <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
