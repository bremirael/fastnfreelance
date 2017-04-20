<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();

            //roles
            $table->boolean('is_admin')->default(0);
            $table->boolean('is_freelancer')->default(0);
            $table->boolean('is_societe')->default(0);

            //profil freelancer
            $table->string('prenom', 60)->nullable();
            $table->string('nom', 80)->nullable();
            $table->string('profession', 255)->nullable();
            $table->text('competence')->nullable();
            $table->date('date_naissance')->nullable();
            $table->string('bio')->nullable();
            $table->string('cv')->nullable();
            
            //profil societe
            $table->string('raison_sociale')->nullable();
            $table->string('secteur_activite')->nullable();
            $table->string('nombre_employes')->nullable();
            $table->string('inf_complementaire')->nullable();
            
            //commun aux 2 profils
            $table->string('ville')->nullable();
            $table->string('adresse')->nullable();
            $table->integer('code_post')->nullable();
            $table->string('photo')->nullable();
            $table->string('tel',20)->nullable();

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
