<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestregistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testregisters', function (Blueprint $table) {
            $table->increments('id');
		$table->string('fname',255)->default('NA');
		$table->string('lname',255)->default('NA');
		$table->string('email',255)->default('NA');
		$table->string('pwd',255)->default('NA');
		$table->string('rpwd',255)->default('NA');

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
        Schema::dropIfExists('testregisters');
    }
}
