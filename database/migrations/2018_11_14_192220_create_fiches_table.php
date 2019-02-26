<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFichesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fiches', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->Integer('produit_id')->unsigned();
            $table->string('design',50);
            $table->string('dimension',50);
            $table->string('poid',50);
            $table->string('processeur',50);
            $table->string('memoire',50);
            $table->string('system',50);
            $table->string('carte_graphique');
            $table->string('resolution',50);
            $table->string('appareil_photo',50);
            $table->date('date_sortie');
            $table->foreign('produit_id')->references('id')->on('produits')->onDelete('cascade');
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
        Schema::dropIfExists('fiches');
    }
}
