<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccreditedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accrediteds', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('acc_number');
            $table->date('acc_date');
            $table->date('acc_exp');
            $table->string('fee');
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
        Schema::dropIfExists('accrediteds');
    }
}
