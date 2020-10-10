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
            $table->unsignedBigInteger('project_statuses_id')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('project_statuses_id')
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
