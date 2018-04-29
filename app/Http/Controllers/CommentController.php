<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Comment;
use App\Product;
use DB;

class CommentController extends Controller
{
    
    public function store($product)
    {
        $user_id = Auth::user()->id;
        $content = request('content');

        $req = [
        	'user_id' => $user_id,
        	'product_id' => $product,
        	'description' => request('content')
        ];
        
        Comment::create($req);
        return redirect()->back();
    }
}
