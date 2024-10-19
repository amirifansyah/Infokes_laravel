<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('subfolders', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Nama subfolder
            $table->unsignedBigInteger('folder_id'); // Foreign key merujuk ke folder
            $table->timestamps();

            // Menambahkan foreign key constraint
            $table->foreign('folder_id')->references('id')->on('folders')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('subfolders');
    }
};
