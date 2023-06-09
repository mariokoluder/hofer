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
    Schema::create('cut_inserts', function (Blueprint $table) {
      $table->id();
      $table->foreignId('operation_id')->constrained();
      $table->foreignId('work_order_id')->constrained();
      $table->foreignId('insert_id')->constrained();
      $table->unsignedInteger('quantity');
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
    Schema::dropIfExists('cut_inserts');
  }
};
