<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiceUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_user', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('providers_id')->unsigned();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('service_user_id')->references('id')->on('users');
            
            $table->foreign('providers_id')->references('id')->on('providers');
            $table->timestamps();
        });

        DB::statment(' ALTER table "service_user" ADD CONSTRAINT "service_user_user_id_foreign" foreign key ("user_id") references "users" ("id")');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('service_user');
    }
}
