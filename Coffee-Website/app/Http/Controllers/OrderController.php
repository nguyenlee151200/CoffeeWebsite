<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Oders_detail;
use App\Order;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::orderBy("id", "DESC")->paginate(10);

        return view("backend.orders.list", compact('orders'));
    }


    public function donHangDaThanhToan()
    {
        $orders = Order::orderBy("id", "DESC")->where("status", 1)->paginate(10);

        return view("backend.orders.da-thanh-toan", compact('orders'));
    }

    public function donHangChuaThanhToan()
    {
        $orders = Order::orderBy("id", "DESC")->where("status", 0)->paginate(10);

        return view("backend.orders.chua-thanh-toan", compact('orders'));
    }

    public function getDetail($id)
    {
        $orders = Order::where("id", $id)->first();
        return view("backend.orders.detail", compact('orders'));
    }

    public function xacNhanThanhToan($id)
    {

        $id_order = $id;
        $order = Order::find($id);
        $order->status = 1;
        $order->save();
        // gui mail don hàng
        return redirect()->back()->with('success', 'Xác nhận đơn hàng thanh toán thành công');

    }
    public function getdel($id)
    {
        $orders = Order::find($id);
        $orders->delete();
        return redirect()->back()->with('success', 'Xóa đơn hàng thành công');
    }
}
