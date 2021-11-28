<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMainContentTwoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('main_content_two', function (Blueprint $table) {
            $table->id();
            $table->string('top_title_main_two')->nullable();
            $table->string('text_title_main_two')->nullable();
            $table->string('image_main_two');
            $table->string('title_main_two');
            $table->string('desc_main_two');
            $table->string('text_main_two');
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
        Schema::dropIfExists('main_content_two');
    }
}
