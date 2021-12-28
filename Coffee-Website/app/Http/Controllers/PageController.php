<?php

namespace App\Http\Controllers;

use App\Post;
use App\Product;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view("frontend.pages.home");
    }

    public function getMenu()
    {
        $products = Product::Orderby('id', 'DESC')->paginate(9);
        return view("frontend.pages.menu", compact('products'));
    }

    public function getPay($id)
    {
        $product = Product::find($id);
        return view("frontend.pages.pay", compact('product'));

    }

    public function getNews()
    {
        $posts = Post::Orderby('id', 'DESC')->paginate(9);
        return view("frontend.pages.news", compact('posts'));
    }

    public function about()
    {
        return view("frontend.pages.about");

    }

    public function getDetailNews($id)
    {
        $post = Post::find($id);
        return view("frontend.pages.news-detail", compact('post'));
    }
}
