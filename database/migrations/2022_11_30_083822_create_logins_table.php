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
        Schema::create('logins', function (Blueprint $table) {
            $table->id();
            $table->string('employeeid');
            $table->foreign('employeeid' )->references('employeeid')->on('users')->onUpdate('cascade')->onDelete('cascade')->nullable();
            $table->string('date')->nullable();
            $table->string('signin')->nullable();
            $table->string('signout')->nullable();
            $table->string('status')->default('2')->nullable();
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
        Schema::dropIfExists('logins');
    }
};
