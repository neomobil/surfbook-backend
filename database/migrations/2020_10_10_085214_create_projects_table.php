<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->mediumText('description')->nullable();
            $table->string('main_image')->nullable();
            $table->date('begin_date');
            $table->date('end_date')->nullable();
            $table->time('begin_time');
            $table->time('end_time')->nullable();
            $table->unsignedBigInteger('project_status_id')->nullable();
            $table->unsignedBigInteger('activity_id')->nullable();
            $table->unsignedBigInteger('location_id')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('activity_id')
                ->on('activities')
                ->references('id')
                ->cascadeOnDelete();
            $table->foreign('location_id')
                ->on('locations')
                ->references('id')
                ->cascadeOnDelete();
            $table->foreign('project_status_id')
                ->on('project_statuses')
                ->references('id')
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
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('projects');
        Schema::enableForeignKeyConstraints();
    }
}
