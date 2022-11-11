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
        Schema::create('employement', function (Blueprint $table) {
            $table->id();
            $table->string('employeid', 100);
            $table->date('dateofbirth');
            $table->string('personalemail',100 )->unique();
            $table->string('fathername', 100);
            $table->string('bloodgroup',100 );
            $table->string('maritalstatus', 100);
            $table->date('marriagedate',30 );
            $table->string('spousename', 100);
            $table->string('nationality',100 );
            $table->string('residentialstatus', 100);
            $table->string('placeofbirth', 300);
            $table->string('countryoforigin', 100);
            $table->string('religion', 100);
            $table->string('internationalemployee', 100);
            $table->string('physicallychallenged',100 );
            $table->string('housenumber', 300);
            $table->string('street',300 );
            $table->string('locality', 300);
            $table->string('district', 50);
            $table->string('state', 100);
            $table->string('pincode', 20);
            $table->date('startdate',20 );
            $table->date('enddate', 20);
            $table->string('institution', 100);
            $table->string('qualification', 100);
            $table->string('companyname', 100);
            $table->string('designation',30 );
            $table->date('fromDate', 100);
            $table->date('todate',100 );
            $table->string('companyaddress', 300);
            $table->unsignedBigInteger('accountnumber')->length(30)->unique();
            $table->unsignedBigInteger('confirmbankaccountnumber')->length(30)->unique();
            $table->string('country', 40);
            $table->string('branchcode', 20);
            $table->string('accountholdername', 100);
            $table->string('accounttype', 40);
            $table->string('pfnumber', 50);
            $table->string('uan', 50);
            $table->string('pannumber', 30);
            $table->string('nameonpan', 100);
            $table->unsignedBigInteger('aadhaarnumber')->length(30)->unique();
            $table->string('nameonaadhaar', 100);
            $table->string('name', 300);
            $table->string('relationship', 100);
            $table->date('dob', 30);
            $table->string('gender',100 );
            $table->string('blood', 100);
            $table->string('Nation',100 );
            $table->string('epfnomineename', 100);
            $table->string('nomination', 100);
            $table->string('epsnomineename', 100);
            $table->string('esinomineename', 100);
            $table->string('permanentaddress');
            $table->string('presentaddress');
            $table->string('qualificationdetails');
            $table->string('previousemployement');
            $table->string('bankaccount');
            // $table->string('permanentaccountnumber');
            $table->string('aadhaar');
            $table->string('passport');
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
        Schema::dropIfExists('employement');
    }
};
