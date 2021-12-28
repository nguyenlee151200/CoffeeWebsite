@extends('backend.master')
@section("title-page", "Quản lý sản phẩm")
@section("title-description", "Sửa sản phẩm")
@section('content')
    <?php $open = "products"?>
    <script>
        var options = {
            filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
            filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
            filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
            filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
        };
    </script>


    <div class="col-md-10">
        @include("messages")
        <form action="{{ route("products.post_edit", $products->id)}}" method="post" enctype="multipart/form-data">
            @csrf

            {{--            <div class="form-group">--}}
            {{--                <label for="">Danh mục sản phẩm</label>--}}
            {{--                <select name="cate_id" id="" class="form-control">--}}

            {{--                    <?php MenuMulti_menu($data, 0, $str = '---| ', old('sltCate')); ?>--}}

            {{--                </select>--}}
            {{--            </div>--}}

            <div class="form-group">
                <label for="">Danh mục</label><br>
                <select class="form-control" name="cates">

                <?php MenuMulti_menu($data, 0, $str = '---| ', $products['cate_id']); ?>
                </select>
            </div>

            <div class="form-group">
                <label for="">Tên sản phẩm </label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Tên sản phẩm..."
                       value="{{$products['name']}}">
            </div>

            <div class="form-group">
                <label for="">Mô tả sản phẩm </label>
                <textarea name="description" id="" cols="30" rows="10"
                          class="form-control">{!!  $products['description']  !!}</textarea>
            </div>
            <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace('description', options);
            </script>
            <div class="form-group">
                <label for="">Giá sản phẩm </label>
                <input type="text" name="price" id="price" class="form-control" placeholder="Giá sản phẩm..."
                       value="{{$products['price']}}">
            </div>
            <div class="form-group">
                <label for="">Khuyến mãi % </label>
                <input type="text" name="discount" id="price" class="form-control" placeholder="Khuyến mãi %"
                       value="{{$products['discount']}}">
            </div>

            <div class="form-group">
                <label for="">Hình đại diện </label><br>
                <img class="img-fluid" src="{{ asset("uploads/products/".$products->image) }}" alt=""
                     style="width: 200px; height: 150px">
                <br><br>
                <input type="file" name="images" class="form-control">
            </div>


            <div class="form-group">
                <label for="">Sản phẩm nổi bật</label><br>
                <label class="radio-inline"><input type="radio" name="hot"
                                                   @if($products->hot == 1) {{"checked"}} @endif  value="1">Có</label>
                <label class="radio-inline"><input type="radio" name="hot"
                                                   @if($products->hot == 0) {{"checked"}} @endif value="0">Không</label>
            </div>


            <div class="form-group">
                <button type="submit" class="btn btn-primary">Lưu lại</button>
                <button type="reset" class="btn btn-default">Làm mới</button>
            </div>

        </form>
    </div>
@endsection

