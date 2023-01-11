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
        Schema::create('leave', function (Blueprint $table) {
            $table->id();
            $table->string('employeid');
            $table->foreign('employeid')->references('employeeid')->on('users')->onUpdate('cascade')->onDelete('cascade'); 
            $table->string('leavetype');
            $table->date('fromdate');
            $table->string('fromdatesession');
            $table->date('todate');
            $table->string('todatesession');
            $table->string('days');
            $table->string('reason');
            $table->string('status')->default('Pending');
            $table->string('balance')->default(12);
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
        Schema::dropIfExists('leave');
    }
};
