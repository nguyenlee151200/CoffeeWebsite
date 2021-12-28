@extends('backend.master')
@section("title-page", "Quản lý sản phẩm")
@section("title-description", "Thêm mới sản phẩm")
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
        <form action="{{ route("products.post_add")}}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="">Danh mục sản phẩm</label><br>

                <select required class="form-control" name="cates">
                    <?php MenuMulti_menu($data, 0, $str = '---| ', old('sltCate')); ?>
                </select>
            </div>

            <div class="form-group">
                <label for="">Tên sản phẩm </label>
                <input required type="text" name="name" id="name" class="form-control" placeholder="Tên sản phẩm..."
                       value="{{old('name')}}">
            </div>


            <div class="form-group">
                <label for="">Mô tả sản phẩm </label>
                <textarea name="description" id="" cols="30" rows="10" class="form-control"
                          required>{{ old('description') }}</textarea>
            </div>
            <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace('description', options);
            </script>
            <div class="form-group">
                <label for="">Giá sản phẩm </label>
                <input required type="text" name="price" id="price" class="form-control" placeholder="Giá sản phẩm..."
                       value="{{old('price')}}">
            </div>
            <div class="form-group">
                <label for="">Khuyến mãi % </label>
                <input type="text" name="discount" id="price" class="form-control" placeholder="Khuyến mãi %"
                       value="{{old('discount')}}">
            </div>


            <div class="form-group">
                <label for="">Hình đại diện </label>
                <input type="file" name="images" class="form-control" required>
            </div>



            <div class="form-group">
                <label for="">Sản phẩm nổi bật</label><br>
                <label class="radio-inline"><input type="radio" name="hot" value="1">Có</label>
                <label class="radio-inline"><input type="radio" name="hot" value="0" checked>Không</label>
            </div>


            <div class="form-group">
                <button type="submit" class="btn btn-primary">Lưu lại</button>

                <button type="reset" class="btn btn-default">Làm mới</button>
            </div>

        </form>
    </div>
@endsection

