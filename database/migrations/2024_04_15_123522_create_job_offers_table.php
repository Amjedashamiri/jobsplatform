<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobOffersTable extends Migration
{
    public function up()
    {
        Schema::create('job_offers', function (Blueprint $table) {
            $table->id('Offer_Id');
            $table->decimal('Offered_Salary', 10, 2);
            $table->date('Date');
            $table->foreignId('Applicant_Id')->constrained('applicants')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('job_offers');
    }
}
