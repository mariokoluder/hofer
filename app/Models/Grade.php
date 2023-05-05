<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
  use HasFactory;

  protected $fillable = ['title', 'ident', 'location', 'diam', 'price', 'currency', 'manufacturer_id'];

  public function manufacturer()
  {
    return $this->belongsTo(Manufacturer::class);
  }
}
