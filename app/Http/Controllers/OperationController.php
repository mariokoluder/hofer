<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Disc;
use App\Models\Operation;
use App\Models\WorkOrder;

class OperationController extends Controller
{
  public function create()
  {
    $discs = Disc::all();
    return view('operation.create', compact('discs'));
  }

  public function store(Request $request)
  {
    $operation = new Operation;
    $operation->start_mass = $request->start_mass;
    $operation->disc_id = $request->disc_id;
    $operation->released = date('Y-m-d');
    $operation->save();
    return redirect()->action([OperationController::class, 'show'], $operation);
  }

  public function show(Operation $operation)
  {
    $work_orders = WorkOrder::all();
    return view('operation.show', compact('operation', 'work_orders'));
  }
}
