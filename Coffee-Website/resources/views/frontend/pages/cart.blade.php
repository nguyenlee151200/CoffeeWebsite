@extends('frontend.master')
@section("content")
    <section class="wet_menu_area">
        <div class="container">
        <div style="color: #000000">
            <table class="table table-condensed" style="margin-top: 30px">
                <thead>
                <tr class="cart_menu">
                    <th class="image">Name</th>
                    <th class="price">Price</th>
                    <th class="quantity">Quantity</th>
                    <th class="total">Total</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($cart as $item)
                    <tr>

                        <td class="cart_description">
                            <h4><a href="">{{ $item->name }}</a></h4>
                            <p>Web ID: {{ $item->id }}</p>
                        </td>
                        <td class="cart_price">
                            <p>{{ number_format($item->price)}} $</p>
                        </td>
                        <td class="cart_quantity">
                            <div class="cart_quantity_button">

                                <form method="POST" action="{{url("cart?product_id=$item->id&increment=1")}}">
                                    <input type="hidden" name="product_id" value="{{ $item->id }}">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                </form>
                                <form method="POST" action="{{route('update_cart', $item->id)}}">
                                    @csrf
                                <input style="width: 50px; text-align: center" class="cart_quantity_input" type="number" name="quantity" value="{{$item->quantity}}" autocomplete="off" size="2">
                            </div>
                        </td>
                        <td class="cart_total">
                            <p class="cart_total_price">{{ number_format($item->price * $item->quantity)}} $</p>
                        </td>t
                        <td>

                            <button type="submit" style="border: none">Update</button>
                            </form>
                        </td>
                        <td class="cart_delete">
                            <a class="cart_quantity_delete" href="{{ route('cart.remove_cart', $item->id) }}"><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
            <a href="{{ route('get_payment') }}" class="btn btn-primary btn-sm" style="color: #ffff!important;padding: 0px 10px !important;">payment</a>
        </div>
        </div>
    </section>
@endsection
