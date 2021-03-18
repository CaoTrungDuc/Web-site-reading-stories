<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('chinaName');
            $table->string('chinaLink');
            $table->string('avatar');
            $table->string('author');
            $table->string('type');
            $table->string('category');
            $table->string('description');
            $table->mediumInteger('status')->default(2);
            $table->string('introduce');
            $table->string('comment');
            $table->mediumInteger('evaluate');
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
        Schema::dropIfExists('stories');
    }
}
