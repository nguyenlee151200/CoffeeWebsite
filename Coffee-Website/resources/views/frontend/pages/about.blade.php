@extends("frontend.master")
@section("content")
    <section class="about_me">
        <div class="container">
            <div class="row justify-content-center text-center pt-5">
                <div class="col-md-8 col-12 ">
                    <p class="line">What Happens Here?</p>
                    <h3 class="title-text text-uppercase wow bounceIn">About me</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-12">
                    <div class="ima">
                        <img src="{{ asset("frontend/image/img/main-home-project-pres-1.jpg") }}" alt="">
                    </div>
                </div>
                <div class="col-md-6 col-12 right">
                    <h1 class="text-uppercase pb-3">Lê trọng nguyên</h2>
                        <p style="color: gray;">Alienum phaedrum torquatos nec eu, vis detraxit periculis ex, nihil expetendis in mei. Mei an pericula euripidis, hinc partem ei est. Eos ei nisl graecis, vix aperiri consequat an. Eius lorem tincidunt vix at, vel pertinax sensibus id, error epicurei mea et. Mea facilisis urbanitas moderatius id. Vis ei rationibus definiebas, eu qui purto zril laoreet. Ex error omnium interpretaris pro, alia illum ea vim.</p>
                        <ul class="nav justify-content-center pt-3">
                            <li class="nav-item">
                                <a class="nav-link active" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="#"><i class="fa fa-print" aria-hidden="true"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </li>
                        </ul>
                </div>
            </div>

        </div>
@endsection
