@extends('backend.master')
@section("title-page", "Quản lý sản phẩm")
@section("title-description", "Thêm phiên bản sản phẩm")
@section('content')
    <?php $open = "products"?>
    <form action="{{ route('products.post_add_variants', $id) }}" method="post">
        @csrf
        <div class="form-group  col-md-3">
            <label for="">Màu </label>
            <select name="color[]" id="" class="form-control">
                @foreach($colors as $item)
                    <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group col-md-3">
            <label for="">Size </label>
            <select name="size[]" id="" class="form-control">
                @foreach($sizes as $item)
                    <option value="{{$item->id}}">{{$item->name_size}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group col-md-3">
            <label for="">Số lượng </label>
            <input class="form-control" type="number" value="1" min="1" name="qty">
        </div>

        <div class="form-group col-md-12">
            <button type="submit" class="btn btn-primary">Thêm</button>
        </div>
    </form>
@endsection
