<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('age')->nullable;
            $table->integer('comfort');
            $table->integer('cleanliness');
            $table->integer('overall_experience');
            $table->integer('month_of_stay');
            $table->integer('year_of_stay');
            $table->longtext('message');
            $table->string('sentence_highlight')->nullable->default(null);
            $table->tinyInteger('approved')->default('0');
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
        Schema::dropIfExists('reviews');
    }
}
