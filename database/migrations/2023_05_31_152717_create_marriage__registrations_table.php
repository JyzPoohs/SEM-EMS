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
        Schema::create('marriage__registrations', function (Blueprint $table) {
            $table->id('MR_ID');
            $table->string('MR_Jurunikah_Name')->nullable();
            $table->string('MR_Payment_Receipt')->nullable();
            $table->string('MR_Receipt_Proof')->nullable();
            $table->time('MR_Time_Nikah')->nullable();
            $table->string('MR_Lafaz_Taliq')->nullable();
            $table->string('MR_Approval_Date')->nullable();
            $table->string('MR_Approval_Status')->nullable();
            $table->string('MR_Submit_Status')->nullable();
            $table->string('U_IC_No')->nullable();
            $table->foreignId('request_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('marriage__registrations');
    }
};
