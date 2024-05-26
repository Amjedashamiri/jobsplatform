<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->enum('Company_Type', ['Technology', 'Finance', 'Healthcare', 'Retail', 'Manufacturing', 'Education', 'Hospitality', 'Transportation', 'Consulting', 'Real Estate', 'Media', 'Non-profit']);
            $table->string('company_phone');
            $table->string('Company_Industry');
            $table->string('Company_Location');
            $table->string('Company_Website')->nullable();
            $table->string('Company_Commercial');
            $table->text('Company_Description');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('companies');
    }
}

