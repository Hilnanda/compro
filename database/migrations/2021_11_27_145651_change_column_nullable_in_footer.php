<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeColumnNullableInFooter extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('footer', function (Blueprint $table) {
            $table->longText('desc_footer')->nullable()->change();
            $table->string('title_footer')->nullable()->change();
            $table->string('image_footer')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('footer', function (Blueprint $table) {
            $table->longText('desc_footer')->nullable()->change();
            $table->string('title_footer')->nullable()->change();
            $table->string('image_footer')->nullable()->change();
        });
    }
}
