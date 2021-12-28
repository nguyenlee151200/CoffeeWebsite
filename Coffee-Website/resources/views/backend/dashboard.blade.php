@extends("backend.master")
@section("title-page", "Bảng điều khiểu")

@section('content')
    @include('messages')
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
            <div class="inner">
                <?php $cate_count = DB::table("categories")->count(); ?>
                <h3>{{ $cate_count }}</h3>

                <p>Danh mục sản phẩm</p>
            </div>
            <div class="icon">
                <i class="fa fa-hospital-alt"></i>
            </div>
            <a href="{{ route('cates.list') }}" class="small-box-footer">More info <i
                    class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>

    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
            <div class="inner">
                <?php $products = DB::table("products")->count(); ?>

                <h3>{{$products}}</h3>

                <p>Sản phẩm </p>
            </div>
            <div class="icon">
                <i class="ion ion-stats-bars"></i>
            </div>
            <a href="{{ route('products.list') }}" class="small-box-footer">More info <i
                    class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>



    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-red">
            <?php $order = DB::table("orders")->count(); ?>

            <div class="inner">
                <h3>{{ $order }}</h3>

                <p>Đơn hàng</p>
            </div>
            <div class="icon">
                <i class="ion ion-ios-cart-outline"></i>
            </div>
            <a href="{{route('order.list')}}" class="small-box-footer">More info <i
                    class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>

    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-success">
            <?php $posts = DB::table("posts")->count(); ?>

            <div class="inner">
                <h3>{{ $posts }}</h3>

                <p>Tin tức </p>
            </div>
            <div class="icon">
                <i class=""></i>
            </div>
            <a href="{{route('posts.list')}}" class="small-box-footer">More info <i
                    class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>

    <div class="row">


        <div class="col-md-6">

            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Top new order</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                class="fa fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                        </button>
                    </div>
                </div>

                <?php $order_new = DB::table("orders")->orderBy('id', "DESC")->limit(15)->get(); ?>
                <div class="box-body table-responsive no-padding box-primary">
                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table no-margin">
                                <thead>
                                <tr>
                                    <th>Order ID</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Status</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($order_new as $item)
                                    <tr>
                                        <td><a href="{{ route('order.get_detail', $item->id) }}">Order#{{$item->id}}</a>
                                        </td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->phone }}</td>
                                        <td><span class="label label-info">New</span></td>

                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>
@endsection
