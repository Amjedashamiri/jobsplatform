<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResumesTable extends Migration
{
    public function up()
    {
        Schema::create('resumes', function (Blueprint $table) {
            $table->id();
            $table->date('Submission_Date');
            $table->text('Skills');
            $table->text('Experience');
            $table->text('Education');
            $table->foreignId('Applicant_Id')->constrained('applicants')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('resumes');
    }
}
