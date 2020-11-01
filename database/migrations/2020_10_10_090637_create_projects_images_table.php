<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects_images', function (Blueprint $table) {
            $table->id();
            $table->string('path');
            $table->string('name')->nullable();
            $table->mediumText('description')->nullable();
            $table->bigInteger('project_id', false, true)->nullable();
            $table->timestamps();
            $table->foreign('project_id')
                ->references('id')
                ->on('projects')
                ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects_images');
    }
}
