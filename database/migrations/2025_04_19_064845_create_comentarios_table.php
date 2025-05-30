<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  public function up(): void
  {
    Schema::create('comentarios', function (Blueprint $table) {
      $table->id();
      $table->foreignId('user_id')->constrained();
      $table->foreignId('post_id')->constrained();
      $table->string('comentario');
      $table->timestamps();
    });
  }

  public function down(): void
  {
    Schema::dropIfExists('comentarios');
  }
};
