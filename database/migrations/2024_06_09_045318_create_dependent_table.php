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
        Schema::create('dependents', function (Blueprint $table) {
            $table->increments('DependentID');
            $table->unsignedInteger('EmployeeID');
            $table->string('DependentName');
            $table->string('Relationship');            
            $table->string('Gender');
            $table->foreign('EmployeeID')->references('EmployeeID')->on('employees')->cascadeOnDelete();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dependents');
    }
};
