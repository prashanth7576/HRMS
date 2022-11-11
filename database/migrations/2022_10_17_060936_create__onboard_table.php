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
        Schema::create('Onboard', function (Blueprint $table) {
            $table->id();
            $table->string('firstname',100 );
            $table->string('middlename', 100)->nullable();
            $table->string('lastname',100 );
            $table->string('jobtitle', 100);
            // $table->string('employenumber',100 );
            $table->string('employeeid', 100);
            $table->foreign('employeeid')->references('employeeid')->on('users')->onUpdate('cascade')->onDelete('cascade'); 
            $table->string('mobile',100 )->unique();
            $table->string('email', 100)->unique();
            $table->string('gender', 30);
            $table->string('location', 100);
            $table->string('extension', 100)->nullable();
            // $table->date('dateofbirth', 20);
            // $table->string('gender', 10);
            // $table->string('reportingmanager', 50);
            // $table->string('status', 30);
            // $table->date('dateofjoining', 30);
            // $table->string('probationperiod', 30);
            // $table->date('confirmationdate', 20);
            // $table->string('title', 50)->unique();
            // $table->unsignedBigInteger('mobilenumber')->length(20)->unique();
            // $table->unsignedBigInteger('emergencycontactnumber')->length(20)->unique();
            $table->date('dateofbirth',100 );
            $table->string('personalemail', 100)->unique();
            $table->string('fathername',100 )->nullable();
            $table->string('bloodgroup', 100)->nullable();
            $table->string('maritalstatus',100 )->nullable();
            $table->date('marriagedate', 100)->nullable();
            $table->string('spousename',100 )->nullable();
            $table->string('nationality', 100);
            $table->string('residentialstatus',100 )->nullable();
            $table->string('placeofbirth', 100)->nullable();
            $table->string('countryoforigin',100 );
            $table->string('religion', 100);
            $table->string('internationalemployee',100 );
            $table->string('physicallychallenged', 100);
            $table->date('joiningdate', 30)->nullable();
            $table->date('confirmationdate', 50)->nullable();
            $table->string('status', 40)->nullable();
            $table->string('probationperiod', 50)->nullable();
            $table->string('noticeperiod', 50)->nullable();
            $table->string('currentcompanyexperience', 50)->nullable();
            $table->string('previousexperience', 50)->nullable();
            $table->string('totalexperience', 50)->nullable();
            $table->string('designation', 30);
            $table->string('department', 50);
            $table->string('officelocation', 300);
            $table->string('attendancescheme', 50)->nullable();
            $table->string('costcenter', 50)->nullable();
            $table->string('division', 50)->nullable();
            $table->string('grade', 300)->nullable();
            $table->string('reportingmanager', 50)->nullable();
            $table->string('bankname', 100);
            $table->string('bankbranch', 50)->nullable();
            $table->string('accounttype', 50)->nullable();
            $table->string('paymenttype', 50)->nullable();
            $table->string('ddpayableat', 300)->nullable();
            $table->string('nameasperbankrecords', 50)->nullable();
            $table->string('pannumber', 20)->unique();
            $table->string('uannumber', 20)->unique()->nullable();
            $table->unsignedBigInteger('aadhaarnumber')->length(20)->unsigned()->unique();
            $table->unsignedBigInteger('bankaccountnumber')->length(20)->unsigned()->unique();
            $table->string('ifsccode', 20)->unique();
            $table->string('branchcode', 20)->unique();
            $table->unsignedBigInteger('accesscardnumber')->length(30)->unsigned()->unique();
            $table->date('accesscardvalidity', 20)->nullable();
           
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
        Schema::dropIfExists('Onboard');
    }
};
