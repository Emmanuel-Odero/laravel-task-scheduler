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
        Schema::create('tasks-results', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('task_id');
            $table->timestamp('ran_at')->useCurrent();
            $table->string('duration');
            $table->longText('result');
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
        Schema::dropIfExists('tasks-results');
    }
};
