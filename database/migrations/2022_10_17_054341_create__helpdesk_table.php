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
        Schema::create('Helpdesk', function (Blueprint $table) {
            $table->id();
            $table->string('category',100 );
            $table->string('subjectline', 300);
            $table->string('description', 500);
            $table->string('priority', 15);
            $table->string('addfile');
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
        Schema::dropIfExists('Helpdesk');
    }
};
