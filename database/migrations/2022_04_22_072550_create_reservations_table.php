<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->bigIncrements('res_id');
            $table->string('res_lname');
            $table->string('res_fname');
            $table->string('res_mname')->nullable();
            $table->string('res_extension')->nullable();
            $table->string('res_street')->nullable();
            $table->string('res_barangay');
            $table->string('res_city');
            $table->string('res_province');
            $table->string('res_region');
            $table->string('res_district');
            $table->string('res_email');
            $table->string('res_contact');
            $table->string('res_nationality');
            $table->string('res_birthdate');
            $table->string('res_gender');
            $table->string('res_civilstat');
            $table->string('res_employstat');
            $table->string('res_namemp')->nullable();
            $table->string('res_addemp')->nullable();
            $table->string('res_datemp')->nullable();
            $table->string('res_salary')->nullable();
        
            $table->string('res_daterec')->nullable();
            $table->string('res_dateaccom')->nullable();
            $table->string('res_scholarship')->nullable();
            $table->string('res_classworker')->nullable();
            $table->string('res_qualification');
            $table->string('res_educational')->nullable();
            $table->string('res_nc')->nullable();
            $table->string('res_birthmonth');
            $table->string('res_birthday');
            $table->string('res_birthyear');
            $table->string('res_age');
            $table->string('res_birthcity');
            $table->string('res_birthprov');
            $table->string('res_birthreg');
            $table->string('res_parent');
            $table->string('res_parentcon');
            $table->string('res_parentmailbar');
            $table->string('res_parentmailcit');
            $table->string('res_parentmailpro');
            $table->string('autoid')->nullable();
            $table->string('registeredDate');
            $table->string('res_lts')->nullable();
            $table->string('res_ltsothers')->nullable();
            $table->string('res_td')->nullable();
            $table->string('res_cd')->nullable();
            $table->string('res_dm')->nullable();
            $table->string('res_update')->nullable();
            $table->string('res_updatedate')->nullable();
            $table->string('qualification_id')->nullable();
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
        Schema::dropIfExists('reservations');
    }
}
