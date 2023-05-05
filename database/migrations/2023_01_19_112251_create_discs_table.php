<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('discs', function (Blueprint $table) {
      $table->id();
      $table->unsignedInteger('code')->unique();
      $table->unsignedInteger('mass');
      $table->unsignedInteger('current_mass');
      $table->string('lot_number');
      $table->foreignId('grade_id')->constrained();
      $table->timestamps();
    });
  }
  
  /**
  * Reverse the migrations.
  *
  * @return void
  */
  public function down()
  {
    Schema::dropIfExists('discs');
  }
};
