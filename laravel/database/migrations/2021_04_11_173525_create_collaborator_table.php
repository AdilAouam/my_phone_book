<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCollaboratorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collaborator', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('civility')->nullable();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('street');
            $table->integer('postal_code');
            $table->string('city');
            $table->string('phone_number')->nullable();
            $table->string('email')->unique();
            $table->unsignedInteger('company_id');
            $table->timestamps();

            $table->foreign('company_id')->references('id')->on('company');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('collaborator');
        $table->dropForeign('collaborator_company_id_foreign');
    }
}
