<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\User;
use Illuminate\Support\Facades\Auth;


class ProductController extends Controller
{
    public function index()
    {
    	$discountz = Product::orderBy('rpercent', 'DESC')->limit(5)->get();
    	$recommendationlist = [3,2,7,9];
    	$suggestionz = Product::whereIn('id', $recommendationlist)->get();

        return view('products', compact('suggestionz', 'discountz'));
    }

    public function show(Product $product)
    {
        $comments = $product->comments;
        return view('product', compact('product', 'comments'));
    }

    public function store(Product $product)
    {
        $u = User::find(Auth::user()->id);
        $u->products()->attach($product);
        $product->quantity -=1;
        $products = $u->products;
        return redirect()->back();
    }

    public function cart()
    {
        $u = User::find(Auth::user()->id);
        $products = $u->products;
        return view('cart', compact('products'));

    }

    public function discounts()
    {
        $discounts = Product::where('rpercent','>', 25)->get();
        return view('pdiscounts', compact('discounts'));
    }

    public function all()
    {
        $products = Product::get();
        return view('all', compact('products'));
    }

    public function delete(Product $product)
    {
        $u = User::find(Auth::user()->id);
        $u->products()->detach($product);
        return redirect()->back();
    }

}
