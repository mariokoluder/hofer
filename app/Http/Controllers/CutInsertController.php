<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Operation;
use App\Models\CutInsert;

class CutInsertController extends Controller
{

  public function create(Operation $operation)
  {
    return $operation->work_order->product->ident;
    return view('cut_insert.create', compact('operation'));
  }

  public function store(Request $request, Operation $operation)
  {
    $cut_insert = new CutInsert;
    $cut_insert->work_order_id = $request->work_order_id;
    $cut_insert->operation_id = $operation->id;
    $cut_insert->save();
    return redirect()->action([OperationController::class, 'show'], $operation);
  }
}
