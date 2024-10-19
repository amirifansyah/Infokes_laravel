<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('files', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Nama file
            $table->unsignedBigInteger('subfolder_id')->nullable(); // Relasi dengan subfolder
            $table->timestamps();

            // Menambahkan foreign key constraint
            $table->foreign('subfolder_id')->references('id')->on('subfolders')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('files');
    }
};
