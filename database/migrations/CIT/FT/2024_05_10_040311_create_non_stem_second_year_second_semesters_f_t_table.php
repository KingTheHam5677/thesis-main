<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('non_stem_second_year_second_semesters_f_t', function (Blueprint $table) {
            $table->id();
            $table->string('course_code');
            $table->string('description');
            $table->integer('units');
            $table->string('prerequisite')->nullable();
            $table->string('corequisite')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('non_stem_second_year_second_semesters_f_t');
    }
};
