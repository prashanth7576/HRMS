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
        Schema::create('empexperience', function (Blueprint $table) {
            $table->id();
            $table->string('employeid');
            $table->string('companyname');
            $table->string('designation');
            $table->date('fromdate');
            $table->date('todate');
            $table->string('companyaddress');
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
        Schema::dropIfExists('empexperience');
    }
};
