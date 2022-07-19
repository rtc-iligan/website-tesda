<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ts_id');
            $table->string('year')->nullable();
            $table->string('sub_title')->nullable();
            $table->string('link',2000)->nullable();
            $table->integer('sort')->default(0);
            $table->timestamps();

            $table->foreign('ts_id')
            ->references('id')
            ->on('transparency_seals')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('postings');
    }
}
