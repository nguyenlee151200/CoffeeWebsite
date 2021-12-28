@extends('backend.master')
@section("title-page", "Quản lý sản phẩm")
@section("title-description", "Cập nhật số lượng phiên bản")
@section('content')
    <?php $open = "products"?>

    <div class="col-md-4">
        <form action="{{ route('products.post_variants_update_qty',$variants->id ) }}" method="post">
            @csrf
            <div class="form-group">
                <label for="">Số lượng</label>
                <input type="text" name="qty" id="" value="{{ $variants->qty }}" class="form-control">
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Cập nhật</button>
            </div>
        </form>
    </div>
@endsection
