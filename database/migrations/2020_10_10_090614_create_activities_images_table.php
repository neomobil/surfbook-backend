<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivitiesImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activity_images', function (Blueprint $table) {
            $table->id();
            $table->string('path');
            $table->string('name')->nullable();
            $table->mediumText('description')->nullable();
            $table->bigInteger('activity_id')->unsigned();
            $table->timestamps();
            $table->foreign('activity_id')
                ->references('id')
                ->on('activities')
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
        Schema::dropIfExists('activity_images');
        Schema::enableForeignKeyConstraints();
    }
}
