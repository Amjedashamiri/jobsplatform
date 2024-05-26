<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('Job_Title');
            $table->text('JobDescription');
            $table->foreignId('Company_Id')->constrained('companies')->onDelete('cascade');
            $table->date('Adv_Date');
            $table->string('Email');
            $table->string('Job_Link')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('jobs');
    }
}
