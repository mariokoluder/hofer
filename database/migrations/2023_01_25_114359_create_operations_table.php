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
    Schema::create('operations', function (Blueprint $table) {
      $table->id();
      $table->integer('start_mass');
      $table->integer('end_mass')->nullable()->default(null);
      $table->foreignId('disc_id')->constrained();
      $table->date('released');
      $table->date('returned')->nullable()->default(NULL);
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
    Schema::dropIfExists('operations');
  }
};
