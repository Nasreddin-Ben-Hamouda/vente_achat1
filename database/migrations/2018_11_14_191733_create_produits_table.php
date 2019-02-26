<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProduitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produits', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('categorie');
            $table->string('model');
            $table->string('marque');
            $table->string('reference');
            $table->integer('prix');
            $table->string('img1');
            $table->string('img2');
            $table->string('img3');
            $table->string('etat');
            $table->string('couleur');
            $table->Integer('quantite');
            $table->longText('description');
            $table->Integer('fourn_id')->unsigned();
            $table->foreign('fourn_id')->references('id')->on('fournisseurs')->onDelete('cascade');
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
        Schema::dropIfExists('produits');
    }
}
