@extends("frontend.master")
@section("content")
    <section class="about_me">
        <div class="container">
            <div class="row justify-content-center text-center pt-5">
                <div class="col-md-8 col-12 ">
                    <p class="line">What Happens Here?</p>
                    <h3 class="title-text text-uppercase wow bounceIn">news</h3>
                </div>
            </div>
            <div class="row">
                @foreach($posts as $item)

                <div class="col-md-6">

                    <div class="">

                        <div class="card">
                            <a href="{{ route('detail_news', $item->id) }}">
                                <img class="card-img-top" src="{{ asset('uploads/posts/'.$item->image)}}" alt="Card image cap">
                            </a>
                            <div class="card-body">
                                <h5 class="card-title">
                                    <a href="{{ route('detail_news', $item->id) }}" style="color: #000000">{{$item->title}}</a></h5>
                                <p class="card-text" style="color: #000000">{!!  Str::words($item->description, 25) !!}</p>
                            </div>
                        </div>

                        </div>

                    </div>
                @endforeach

            </div>

        </div>

        </div>
    </section>
@endsection
