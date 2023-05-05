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
    Schema::create('inserts', function (Blueprint $table) {
      $table->id();
      $table->integer('surface');
      $table->unsignedInteger('quantity');
      $table->unsignedBigInteger('position');
      $table->foreignId('grade_id')->constrained();
      $table->foreignId('product_id')->constrained();
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
    Schema::dropIfExists('inserts');
  }
};
