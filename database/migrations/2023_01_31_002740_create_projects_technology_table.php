<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects_technology', function (Blueprint $table) {
            // $table->id();
            // è la colonna foreign key per i progetti
            $table->unsignedBigInteger('projects_id');
            // è la foreign key di questa colonna
            $table->foreign('projects_id')
                ->references('id')
                ->on('projects')
                ->onDelete('cascade');


            $table->unsignedBigInteger('technology_id');

            $table->foreign('technology_id')
                ->references('id')
                ->on('technologies')
                ->cascadeOnDelete();

            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects_technology');
    }
};
