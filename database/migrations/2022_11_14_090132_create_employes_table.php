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
        Schema::create('employes', function (Blueprint $table) {
            $table->id();
            $table->string('firstname', 40);
            $table->string('lastname', 30);
            $table->string('jobtitle', 40);
            $table->string('employeeid', 20)->unique();
            $table->unsignedBigInteger('mobile')->length(15);
            $table->string('email', 50)->unique();
            $table->string('gender', 15);
            $table->string('address', 30)->nullable();
            $table->date('dateofbirth', 20);
            $table->date('joiningdate', 20);
            $table->date('confirmationdate', 20);
            $table->string('probationperiod', 30)->nullable();
            $table->string('noticeperiod', 30)->nullable();
            $table->string('designation', 50);
            $table->string('department', 50);
            $table->string('officelocation', 50);
            $table->string('shifttype');
            $table->string('reportingmanager', 40);
            $table->string('profilepicture');
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
        Schema::dropIfExists('employes');
    }
};
