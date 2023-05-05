<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
  public function index()
  {
    $products = Product::all();
    return view('product.index', compact('products'));
  }

  public function create()
  {
    return view('product.create');
  }

  public function store(Request $request)
  {
    $product = new Product;
    $product->ident = $request->ident;
    $product->title = $request->title;
    $product->save();
    return redirect()->action([ProductController::class, 'index']);
  }
}
