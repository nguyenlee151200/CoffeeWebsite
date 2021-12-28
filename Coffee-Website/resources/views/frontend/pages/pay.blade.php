@extends("frontend.master")
@section("content")
        <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/pay.css') }}">
    <section class="item_product">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="sneaker">
                            <div class="circle">

                            </div>
                            <img src="{{ asset("uploads/products/".$product->image) }}" alt="adidas">
                        </div>
                        <div class="info-item">
                            <h1 class="title">{{$product->name}}</h1>
                            <h3>FUTURE-READY TRAINERS WITH WRAPPED BOOST FOR EXCEPTION COMFORT.</h3>
                            <form method="POST" action="{{url('cart')}}">
                                @csrf
                            <div class=" sizes buttons_added">
                                <input class="minus is-form" type="button" value="-">
                                <input type="hidden" name="product_id" value="{{$product->id}}">

                                <input  class="input-qty" max="100" min="1" name="qty" type="number" value="1">
                                <input class="plus is-form" type="button" value="+">
                            </div>
                            <div class="purchase">
                                <button type="submit">Purchase</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="more_info">
        <div class="container">
            <div class="row">
                <div class="col-12 justify-content-center">
                    <ul>
                        <li><a href="">{!! $product->description !!}</a></li>
                        <li><a href="">additional information</a></li>
                        <li><a href="">reviews</a></li>
                    </ul>
                    <p class="para">Alienum phaedrum torquatos nec eu, vis detraxit periculis ex, nihil expetendis in mei. Mei an pericula euripidis, hinc partem ei est. Eos ei nisl graecis, vix aperiri consequat an. Eius lorem tincidunt vix at, vel pertinax sensibus id, error epicurei mea et. Mea facilisis urbanitas moderatius id. Vis ei rationibus definiebas, eu qui purto zril laoreet. Ex error omnium interpretaris pro, alia illum ea vim.

                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
