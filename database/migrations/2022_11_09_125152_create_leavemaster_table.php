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
        Schema::create('leavemaster', function (Blueprint $table) {
            $table->id();
            $table->string('lossofpay')->default('0');
            $table->string('casualleave')->default('24');
            $table->string('compoff')->default('0');
            $table->string('sickleave')->default('12');
            $table->string('privilegedleave')->default('0');
            $table->string('paternityleave')->default('0');
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
        Schema::dropIfExists('leavemaster');
    }
};
