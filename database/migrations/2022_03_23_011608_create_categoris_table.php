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
        if(!Schema::hasTable('categoris'))
        {
            Schema::create('categoris', function (Blueprint $table) {
                $table->id();
                $table->string('category_name');
                $table->string('category_image')->nullable();
                $table->tinyInteger('status')->default('0')->comment('0=>Unpublished,1=>Published');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categoris');
    }
};
