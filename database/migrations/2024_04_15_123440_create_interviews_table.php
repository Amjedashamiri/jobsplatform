<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInterviewsTable extends Migration
{
    public function up()
    {
        Schema::create('interviews', function (Blueprint $table) {
            $table->id('Interview_Id');
            $table->foreignId('Applicant_Id')->constrained('applicants')->onDelete('cascade');
            $table->foreignId('Job_id')->constrained('jobs')->onDelete('cascade');
            $table->dateTime('Interview_Date');
            $table->text('Interview_Details');
            $table->string('Interview_Location');
            $table->foreignId('Company_Id')->constrained('companies')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('interviews');
    }
}
