<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('subject');
            $table->text('content');
            $table->integer('created_by')->unsigned();
            $table->tinyInteger('status');
            $table->tinyInteger('priority');
            $table->dateTime('deadline');
            $table->integer('assigned_to')->unsigned();
            $table->tinyInteger('rating')->nullable();
            $table->integer('team_id')->unsigned();
            $table->datetime('resolved_at')->nullable();
            $table->datetime('closed_at')->nullable();
            $table->timestamps();
            $table->datetime('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tickets');
    }
}
