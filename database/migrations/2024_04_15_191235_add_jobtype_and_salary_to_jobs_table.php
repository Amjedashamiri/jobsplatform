<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddJobtypeAndSalaryToJobsTable extends Migration
{
    public function up()
    {
        Schema::table('jobs', function (Blueprint $table) {
            $table->enum('JobType', ['full time', 'part time'])->after('Company_Id');
            $table->decimal('Salary', 8, 2)->nullable()->after('JobType'); // Assuming Salary is optional
        });
    }

    public function down()
    {
        Schema::table('jobs', function (Blueprint $table) {
            $table->dropColumn(['JobType', 'Salary']);
        });
    }
}
