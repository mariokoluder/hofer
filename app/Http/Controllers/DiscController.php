<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDiscRequest;
use App\Http\Requests\UpdateDiscRequest;
use App\Models\Grade;
use App\Models\Disc;

class DiscController extends Controller
{
  public function index()
  {
    $discs = Disc::all();
    return view('disc.index', compact('discs'));
  }

  public function create()
  {
    $grades = Grade::orderBy('ident')->get();
    return view('disc.create', compact('grades'));
  }

  public function store(StoreDiscRequest $request)
  {
    $disc = Disc::create($request->all());
    $disc->current_mass = $disc->mass;
    $disc->save();
    return redirect()->action([DiscController::class, 'index'])->with('success', 'Uspješno ste kreirali ploču broj: '. $disc->code);
  }

  public function edit(Disc $disc)
  {
    $grades = Grade::orderBy('ident')->get();
    return view('disc.edit', compact('disc', 'grades'));
  }

  public function update(UpdateDiscRequest $request, Disc $disc)
  {
    $disc->update($request->all());
    return redirect()->action([DiscController::class, 'index'])->with('success', 'Uspješno ste uredili ploču broj: '. $disc->code);
  }

  public function destroy(Disc $disc)
  {
    $disc->delete();
    return redirect()->action([DiscController::class, 'index'])->with('success', 'Uspješno ste izbrisali ploču broj: '. $disc->code);
  }
}
