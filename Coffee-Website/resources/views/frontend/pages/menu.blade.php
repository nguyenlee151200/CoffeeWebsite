@extends('frontend.master')
@section("content")
    <div style="clear: both"></div>

    <section class="wet_menu_area">
        <div class="container">
            <div class="row justify-content-center text-center pt-5">
                <div class="col-md-8 col-12 ">
                    <p class="line">What Happens Here?</p>
                    <h3 class="title-text text-uppercase wow bounceIn">Simple menu</h3>
                </div>
            </div>
            <div class="row menu_list">
                <div class="row">
                @foreach($products as $item)
                    <div class="col-sm-6 col-12">
                        <a href="{{ route('pay', $item->id) }}">
                            <div class="row">
                                <div class="col-2">
                                    <img src="{{ asset('uploads/products/'.$item->image)}}" alt="" width="100%">
                                </div>
                                <div class="col-8">
                                    <h4>{{ $item->name }}</h4>
                                    <span>{!!  Str::words($item->description, 20) !!}</span>
                                </div>
                                <div class="col-2">
                                    ${{ number_format($item->price, 0, ',', '.') }}
                                </div>
                            </div>
                        </a>

                    </div>
                    @endforeach

                </div>
            </div>
            <div class="row justify-content-center">
                <button class="btn primary-button text-uppercase wow bounceInUp">Work with us!</button>
            </div>
        </div>
    </section>
    @endsection
