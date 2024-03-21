<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_detail', function (Blueprint $table) {
            $table->id();
            $table->string('book_id');
            $table->mediumText('short_description')->nullable();
            $table->longText('description')->nullable();
            $table->string('edition')->nullable();
            $table->string('publish')->nullable();
            $table->string('country')->nullable();
            $table->string('language')->nullable();
            $table->mediumText('meta_title')->nullable();
            $table->mediumText('meta_keywords')->nullable();
            $table->mediumText('meta_description')->nullable();
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
        Schema::dropIfExists('book_detail');
    }
}
