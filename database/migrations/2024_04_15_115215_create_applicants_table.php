<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicantsTable extends Migration
{
    public function up()
    {
        Schema::create('applicants', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->enum('Employment_type', ['full time', 'part time']);
            $table->unsignedBigInteger('Consultant_Id');
            $table->string('Availability');
            $table->string('Desired_job');
            $table->timestamps();

            $table->foreign('Consultant_Id')->references('id')->on('manpower_consultants')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('applicants');
    }
}
