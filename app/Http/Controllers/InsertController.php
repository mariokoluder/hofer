<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Insert;
use App\Models\Product;
use App\Models\Grade;

class InsertController extends Controller
{
  public function create(Product $product)
  {
    $grades = Grade::where('id', '>=', 0)->orderBy('ident')->get();
    return view('insert.create', compact('product', 'grades'));
  }

  public function store(Product $product, Request $request)
  {
    $insert = new Insert;
    $insert->surface = $request->surface;
    $insert->position = $request->position;
    $insert->quantity = $request->quantity;
    $insert->grade_id = $request->grade_id;
    $insert->product_id = $product->id;
    $insert->save();
    return redirect()->action([ProductController::class, 'index']);
  }
}
