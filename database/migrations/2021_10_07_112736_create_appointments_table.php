<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->string('Email');
            $table->integer('Phone');
            $table->Date('Date');
            $table->longtext('Issue');
            $table->string('status');
            $table->UnsignedBigInteger('Lawyer_Id');
            $table->foreign('Lawyer_Id')->references('id')->on('users');        
            $table->UnsignedBigInteger('Client_Id');
            $table->foreign('Client_Id')->references('id')->on('clients');
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
        Schema::dropIfExists('appointments');
    }
}
