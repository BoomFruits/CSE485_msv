<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('employee_project', function (Blueprint $table) {
            $table->unsignedInteger('ProjectID');
            $table->unsignedInteger('EmployeeID');
            $table->primary(['ProjectID','EmployeeID'],'epID');
            $table->foreign('EmployeeID')->references('EmployeeID')->on('employees')->cascadeOnDelete();
            $table->foreign('ProjectID')->references('ProjectID')->on('projects')->cascadeOnDelete();
            $table->time('worktime');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee_project');
    }
};
