<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Category;
use App\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::OrderBy('id', "DESC")->paginate(10);
        return view("backend.products.index", compact('products'));
    }

    public function getAdd()
    {
        $data = Category::all();

        return view("backend.products.add", compact('data'));
    }


    public function postAdd(Request $request)
    {

        $product = new Product();
        $product->name = $request->name;
        $product->slug = str_slug($request->name);
        $product->price = $request->price;
        $product->description = $request->description;
        $product->discount = $request->discount;
        $product->cate_id = $request->cates;
        $product->hot = $request->hot;

        if ($request->hasFile('images')) {
            $f = $request->file('images')->getClientOriginalName();
            $filename = time() . '_' . $f;
            $request->file('images')->move('uploads/products/', $filename);
            $product->image = $filename;
        }
        $product->save();

        return redirect()->route('products.list')->with('success', 'Thêm sản phẩm thành công');
    }

    public function getEdit($id)
    {
        $data = Category::all();
        $products = Product::find($id);

        return view("backend.products.edit", compact('products','data'));

    }

    public function postEdit(Request $request, $id)
    {

        $product = Product::find($id);
        $product->name = $request->name;
        $product->slug = str_slug($request->name);
        $product->price = $request->price;
        $product->description = $request->description;
        $product->discount = $request->discount;
        $product->cate_id = $request->cates;
        $product->hot = $request->hot;

        if ($request->hasFile('images')) {
            $f = $request->file('images')->getClientOriginalName();
            $filename = time() . '_' . $f;

//            $request->file('images')->move('uploads/posts/', $filename);

//            $image_resize = Image::make($request->file('images')->getRealPath());
            $request->file('images')->move("uploads/products/", $filename);
//
//            $destinationPath = $baser_url.'/uploads/products/';
//            $image_resize->resize(257, 257);
//            $image_resize->save($destinationPath. $filename, 80);
            $product->image = $filename;
        }
        $product->save();

        return redirect()->route('products.list')->with('success', 'Sửa sản phẩm thành công');

    }

    public function getdel($id)
    {
        $product = Product::find($id);
        $path = public_path() . "uploads/products/" . $product->image;
        if (file_exists($path)) {
            unlink($path);
        }

        $product->delete();
        return redirect()->route('products.list')->with('success', 'Xóa sản phẩm thành công');

    }


}
