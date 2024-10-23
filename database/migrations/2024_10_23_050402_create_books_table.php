<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->String('title');
            $table->String('author');
            $table->year('year');
            $table->String('publisher');
            $table->String('city');
            $table->String('cover');
            $table->unsignedBigInteger('bookshelfs_id');
            $table->timestamps();
            
            $table->foreign('bookshelfs_id')->references('id')->on('bookshelfs')
                    ->onUpdate('cascade')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::create('books', function (Blueprint $table) {
            $table->dropConstrainedForeignId('bookshelf_id');
        });
        Schema::dropIfExists('books');
    }
};
