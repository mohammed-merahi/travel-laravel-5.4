<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOmrasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('omras', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type_chambre',75);
            $table->double('prix_ttc',75);
            $table->string('ville_depart_zone',75);
            $table->string('compagnie_aerienne',75);
            $table->string('hotel_makkah',75);
            $table->string('hotel_medine',75);
            $table->string('repas_inclus',75);
            $table->string('assurance',75);
            $table->string('transfert_interne',75);
            $table->string('guide',75);
            $table->string('assistance_medicale',75);
            $table->string('visite',75);
            $table->string('formation_stage',75);
            $table->string('2eme_omra_groupe',75);
            $table->string('5litres_zamzam',75);
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
        Schema::dropIfExists('omras');
    }
}
