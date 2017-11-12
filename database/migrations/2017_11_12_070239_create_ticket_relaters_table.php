<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketRelatersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ticket_relaters', function (Blueprint $table) {
            $table->integer('ticket_id')->unsigned();
            $table->integer('employee_id')->unsigned();
            $table->primary(['ticket_id','employee_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ticket_relaters');
    }
}
