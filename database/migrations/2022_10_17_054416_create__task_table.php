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
        Schema::create('Task', function (Blueprint $table) {
            $table->id();
            $table->string('taskname',100 );
            $table->string('assignee', 300);
           
            $table->date('duedate', 15);
          
            $table->string('priority',20 );
            $table->string('tags', 50);
            $table->string('description', 300);
            $table->string('addfile');
            $table->unsignedBigInteger( 'Active')->lenght(10);
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
        Schema::dropIfExists('Task');
    }
};
