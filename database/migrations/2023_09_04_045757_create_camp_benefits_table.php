<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampBenefitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('camp_benefits', function (Blueprint $table) {
            $table->id();
            // Cara 1st Metode :
            //$table->bigInteger('camp_id')->unsigned(); //unsigned = agar tidak minus. // tabel relasi harus sama" tipe yaitu integer dan unsigned, 
            // $table->unsignedBigInteger('camp_id');

            // Cara 2st Metode :
            $table->foreignId('camp_id')->constrained(); // syarat nya nama foreign key harus sama dengan nama tabel dan reference nya id. contoh camp_id => camp adalah sumber nama tabel relasi (tanda _ sebagai pemisah) id adalah sumber relasi
            $table->string('name');
            $table->timestamps();

            // Cara 1st Metode :
            //$table->foreign('camp_id')->references('id')->on('camps')->onDelete('cascade'); // foreign('camp_id') =>id yang di camps mau di relasi kan dengan camp_id di camp_benefits. // references('id') => berdasarkan sumber relasi adalah camps. //on('camps') => nama sumber tabel relasi
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('camp_benefits');
    }
}
