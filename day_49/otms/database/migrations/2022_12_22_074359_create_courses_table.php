<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('course_category_id');
            $table->bigInteger('course_sub_category_id');
            $table->bigInteger('user_id')->comment('trainer user id');
            $table->string('title');
            $table->float('price',10,2)->default(0);
            $table->text('short_description')->nullable();
            $table->text('long_description')->nullable();
            $table->text('image')->nullable();
            $table->string('starting_date')->nullable();
            $table->string('ending_date')->nullable();
            $table->string('total_hour')->nullable();
            $table->string('slug')->nullable();
            $table->tinyInteger('status')->default(0)->comment('0=>Unpublished 1=>Published');
            $table->integer('hit_count')->default(0);
            $table->integer('apply_count')->default(0);
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
        Schema::dropIfExists('courses');
    }
};
