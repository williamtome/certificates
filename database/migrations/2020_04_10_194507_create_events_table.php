<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->char('prefix', 1);
            $table->string('title');
            $table->integer('hourly_schedule'); // carga horária
            $table->dateTime('starting_date');
            $table->dateTime('ending_date');
            $table->decimal('minimum_frequency', 2, 1)->nullable(); // frequência mínima
            $table->text('schedule')->nullable(); // cronograma
            $table->unsignedInteger('city_id');
            $table->unsignedInteger('template_id');

            $table->foreign('city_id')->references('id')->on('cities');
            $table->foreign('template_id')->references('id')->on('templates');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
