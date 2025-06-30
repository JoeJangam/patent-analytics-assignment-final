<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('patents', function (Blueprint $table) {
            $table->id();
            $table->string('patent_number')->nullable();
            $table->string('title')->nullable();
            $table->string('assignee')->nullable();
            $table->string('inventor')->nullable();
            $table->date('publication_date')->nullable();
            $table->string('technology_area')->nullable();
            $table->string('patent_type')->nullable();
            $table->string('country')->nullable();
            $table->text('abstract')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('patents');
    }
};
