<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('etudiants', function (Blueprint $table) {
            $table->id();
            $table->string('uuid')->unique();
            $table->boolean('isActive')->default(false);
            $table->boolean('typeFormation')->default(true);
            $table->string('fname');
            $table->string('lname')->nullable();
            $table->string('sexe');
            $table->string('email')->unique();
            $table->string('phoneStudent');
            $table->string('birth');
            $table->string('birthLocation');
            $table->longText('adresse');
            $table->string('country');
            $table->string('city');
            $table->string('region');
            $table->string('zipCode');
            $table->string('fatherName');
            $table->string('motherName');
            $table->string('adresseParent');
            $table->string('phoneParent');
            $table->string('jobParent');
            $table->string('number')->unique()->nullable();
            $table->unsignedBigInteger('classeId');
            $table->unsignedBigInteger('parcourId');
            $table->longText('photo')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('classeId')->references('id')->on('classes')->onDelete('cascade');
            $table->foreign('parcourId')->references('id')->on('parcours')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('etudiants');
    }
};
