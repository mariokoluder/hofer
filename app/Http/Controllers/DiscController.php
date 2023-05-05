<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
    $grades = Grade::where('id', '>=', 0)->orderBy('ident')->get();
    return view('disc.create', compact('grades'));
  }

  public function store(Request $request)
  {
    $disc = new Disc;
    $disc->code = $request->code;
    $disc->mass = $disc->current_mass = $request->mass;
    $disc->lot_number = $request->lot_number;
    $disc->grade_id = $request->grade_id;
    $disc->location = $request->location;
    $disc->save();
    return redirect()->action([DiscController::class, 'index']);
  }

  public function edit(Disc $disc)
  {
    $grades = Grade::where('id', '>=', 0)->orderBy('ident')->get();
    return view('disc.edit', compact('disc', 'grades'));
  }

  public function update(Request $request, Disc $disc)
  {
    $disc->code = $request->code;
    $disc->mass = $request->mass;
    $disc->lot_number = $request->lot_number;
    $disc->grade_id = $request->grade_id;
    $disc->location = $request->location;
    $disc->save();
    return redirect()->action([DiscController::class, 'index']);
  }
}
