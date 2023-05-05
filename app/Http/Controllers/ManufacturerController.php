<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Manufacturer;

class ManufacturerController extends Controller
{

  public function index()
  {
    $manufacturers = Manufacturer::all();
    return view('manufacturer.index', compact('manufacturers'));
  }
  public function create()
  {
    return view('manufacturer.create');
  }

  public function store(Request $request)
  {
    $manufacturer = new Manufacturer;
    $manufacturer->title = $request->title;
    $manufacturer->save();
    return redirect()->action([ManufacturerController::class, 'index']);
  }
}
