<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Movies extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table){
            $table->increments('id');
            $table->integer('vote_count')->unsigned();
            $table->decimal('vote_average', 2,1);
            $table->string('title', 150);
            $table->string('original_title', 150);
            $table->string('original_language', 4);
            $table->tinyInteger('adult');
            $table->string('poster_path', 255)->nullable()->default(null);
            $table->text('overview');
            $table->date('release_date');
            $table->decimal('popularity', 5,3);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movies');
    }
}
