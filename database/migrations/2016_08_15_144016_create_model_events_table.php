<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelEventsTable extends Migration{

    public function up(){
        Schema::create('model_events', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date');
            $table->text('text');
            $table->string('title', 100);
            $table->string('when', 100);
            $table->string('schedule', 100);
            $table->string('where', 100);
            $table->string('address', 100);
            $table->string('link', 100);
            $table->string('ticket-link', 100);
            $table->timestamps();
        });
    }

    public function down(){
        Schema::drop('model_events');
    }
}
