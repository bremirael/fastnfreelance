<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projets', function (Blueprint $table) {
            $table->increments('id');
            //Information sur le projet
            $table->string('type_projet')->nullable();
            $table->string('titre')->nullable();
            $table->text('description')->nullable();

            //Option du projet
            $table->string('budget')->nullable();
            $table->string('cahiercharges')->nullable();

             // publier : permet de savoir si l'annonce a été publié
            $table->boolean('publier')->nullable();
            $table->boolean('validation_admin')->default(false);
            $table->integer('users_id')->unsigned()->nullable();
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
        Schema::dropIfExists('projets');
    }
}
