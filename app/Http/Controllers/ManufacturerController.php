<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreManufacturerRequest;
use App\Http\Requests\UpdateManufacturerRequest;
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

  public function store(StoreManufacturerRequest $request)
  {
    $manufacturer = Manufacturer::create($request->all());
    return redirect()->action([ManufacturerController::class, 'index'])->with('success', 'Uspješno ste kreirali dobavljača: '. $manufacturer->title);
  }

  public function edit(Manufacturer $manufacturer)
  {
    return view('manufacturer.edit', compact('manufacturer'));
  }

  public function update(UpdateManufacturerRequest $request, Manufacturer $manufacturer)
  {
    $manufacturer->update($request->all());
    return redirect()->action([ManufacturerController::class, 'index'])->with('success', 'Uspješno ste uredili dobavljača: '. $manufacturer->title);
  }

  public function destroy(Manufacturer $manufacturer)
  {
    $manufacturer->delete();
    return redirect()->action([ManufacturerController::class, 'index'])->with('success', 'Uspješno ste izbrisali dobavljača: '. $manufacturer->title);
  }

}
