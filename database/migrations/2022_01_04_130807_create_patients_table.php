<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('philippine_regions')->index();
            $table->string('philippine_provinces')->index();
            $table->string('philippine_cities')->index();
            $table->string('philippine_barangays')->index();
            $table->string('firstname');
            $table->string('middlename');
            $table->string('lastname');
            $table->string('suffix')->nullable();
            $table->string('birthdate')->nullable();
            $table->integer('age')->nullable();
            $table->string('gender');
            $table->string('civil_status');
            $table->string('occupation')->nullable();
            $table->string('contact')->nullable();
            $table->string('email')->nullable();
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
        Schema::dropIfExists('patients');
    }
}
