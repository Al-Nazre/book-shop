<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->string('img')->nullable();
            $table->string('code')->nullable();
            $table->bigInteger('subject_id')->nullable();
            $table->bigInteger('sub_subject_id')->nullable();
            $table->bigInteger('type_id')->nullable();
            $table->bigInteger('publication_id')->nullable();
            $table->bigInteger('author_id')->nullable();
            $table->string('qty');
            $table->string('price');
            $table->string('discount')->nullable();
            $table->tinyInteger('status');
            $table->tinyInteger('popular');
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
        Schema::dropIfExists('book');
    }
}
