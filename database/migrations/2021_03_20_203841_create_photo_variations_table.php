<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhotoVariationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photo_variations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('photo_id')->constrained('photos','id')->onDelete('cascade');
            $table->string('image_type');
            $table->string('dimension');
            $table->integer('price');
            $table->string('file_path');
            $table->string('extenison');
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
        Schema::dropIfExists('photo_variations');
    }
}
