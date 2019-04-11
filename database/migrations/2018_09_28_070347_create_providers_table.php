<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProvidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('providers', function (Blueprint $table) {
            $table->increments('id');
            
            $table->string('logo');
            $table->string('email');
            $table->string('service');
            $table->string('certification');
            $table->longText('description');
            $table->integer('user_id');
            $table->float('minimum_price', 8, 2);
            $table->string('special_tool')->nullable();
           
            
            $table->string('address');
            $table->string('state');
            $table->string('city');
            $table->string('phone');
            $table->timestamp('email_verified_at')->nullable();
           
            $table->rememberToken();
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
        Schema::dropIfExists('providers');
        $table->dropColumn('name');
        $table->dropColumn('logo');
        $table->dropColumn('qualification');
        $table->dropColumn('minimum_price');
        $table->dropColumn('special_tool')->nullable();
       
        $table->string('service');
        $table->dropColumn('address');
        $table->dropColumn('state');
        $table->dropColumn('city');
        $table->dropColumn('phone')->unique();
    }
}
