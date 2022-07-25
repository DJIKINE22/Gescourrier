<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sortants', function (Blueprint $table) {
            $table->id();
            $table->string('destinataire');
            $table->date('date_depart');
            $table->string('libelle');
            $table->unsignedBigInteger('courrier');
            $table->foreign('courrier')
            ->references('id')
            ->on('courriers')
            ->onDelete('cascade');
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
        Schema::dropIfExists('sortants');
    }
};
