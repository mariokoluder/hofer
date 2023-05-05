<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Manufacturer;
use App\Models\Grade;
use App\Models\Disc;

class GradeController extends Controller
{
  public function index()
  {
    $grades = Grade::all();
    return view('grade.index', compact('grades'));
  }

  public function create()
  {
    $manufacturers = Manufacturer::all();
    return view('grade.create', compact('manufacturers'));
  }

  public function store(Request $request)
  {
    $grade = new Grade;
    $grade->title = $request->title;
    $grade->ident = $request->ident;
    $grade->diam = $request->diam;
    $grade->manufacturer_id = $request->manufacturer_id;
    $grade->save();

    return redirect()->action([GradeController::class, 'index']);
  }

  public function coef(Grade $grade)
  {
    $discs = Disc::where('grade_id', $grade->id)->get()->avg('mass');
    $grade->coefficient = ($discs/100)/(($grade->diam/2)**2*3.14);
    $grade->save();
    return redirect()->action([GradeController::class, 'index']);
  }
}
