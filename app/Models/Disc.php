<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disc extends Model
{
  use HasFactory;

  protected $fillable = ['code', 'mass', 'lot_number', 'grade_id', 'location'];

  public function grade()
  {
    return $this->belongsTo(Grade::class);
  }
}
