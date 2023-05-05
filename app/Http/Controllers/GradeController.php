<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGradeRequest;
use App\Http\Requests\UpdateGradeRequest;
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

  public function store(StoreGradeRequest $request)
  {
    $grade = Grade::create($request->all());
    return redirect()->action([GradeController::class, 'index'])->with('success', 'Uspješno ste kreirali materijal: '. $grade->title);
  }

  public function edit(Grade $grade)
  {
    $manufacturers = Manufacturer::all();
    return view('grade.edit', compact('grade', 'manufacturers'));
  }

  public function update(UpdateGradeRequest $request, Grade $grade)
  {
    $grade->update($request->all());
    return redirect()->action([GradeController::class, 'index'])->with('success', 'Uspješno ste uredili materijal: '. $grade->title);
  }

  public function destroy(Grade $grade)
  {
    $grade->delete();
    return redirect()->action([GradeController::class, 'index'])->with('success', 'Uspješno ste izbrisali materijal: '. $grade->title);
  }

  public function coef(Grade $grade)
  {
    $discs = Disc::where('grade_id', $grade->id)->get()->avg('mass');
    $grade->coefficient = ($discs/100)/(($grade->diam/2)**2*3.14);
    $grade->save();
    return redirect()->action([GradeController::class, 'index']);
  }
}
