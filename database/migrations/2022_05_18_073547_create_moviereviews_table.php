<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMovieReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('moviereviews', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
                $table->string('moviename');
                $table->string('category');
                $table->string('score');
                $table->string('comments');
                $table->string('dateofreview');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('moviereviews');
    }
};
