<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdvisorBasicInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advisor_basic_infos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('badge_id')->default(1);
             $table->integer('user_id');
             $table->string('firstname');
             $table->string('lastname');
             $table->string('website')->nullable();
             $table->string('compensationModel')->nullable();
             $table->string('firm')->nullable();
             $table->string('firmWebsite')->nullable();
             $table->string('crdNumber');
             $table->date('dob')->nullable();
             $table->string('phone')->nullable();
             


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
        Schema::dropIfExists('advisor_basic_infos');
    }
}
