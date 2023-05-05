<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WorkOrder;
use App\Models\Product;
use App\Models\Grade;

class WorkOrderController extends Controller
{
  public function index()
  {
    $work_orders = WorkOrder::all();
    return view('work_order.index', compact('work_orders'));
  }

  public function create()
  {
    $products = Product::all();
    $grades = Grade::all();
    return view('work_order.create', compact('products', 'grades'));
  }

  public function store(Request $request)
  {
    $work_order = new WorkOrder;
    $work_order->ident = $request->ident;
    $work_order->quantity = $request->quantity;
    $work_order->grade_id = $request->grade_id;
    $work_order->product_id = $request->product_id;
    $work_order->save();
    return redirect()->action([WorkOrderController::class, 'index']);
  }

}
