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
        if(!Schema::hasTable('blogs'))
        {
            Schema::create('blogs', function (Blueprint $table) {
                $table->id();
                $table->text('blog_title');
                $table->text('category_id');
                $table->string('blog_image')->nullable();
                $table->longText('blog_content');
                $table->tinyInteger('status')->default('0')->comment('0=>unpublishde,1=>published');
                $table->integer('hit_count')->nullable();
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
        Schema::dropIfExists('blogs');
    }
};
