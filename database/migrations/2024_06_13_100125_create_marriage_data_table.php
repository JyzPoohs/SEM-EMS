<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarriageDataTable extends Migration
{
    public function up()
    {
        Schema::create('marriage_data', function (Blueprint $table) {
            $table->id();
            $table->string('document');
            $table->string('bride_name');
            $table->string('groom_name');
            $table->date('marriage_date');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('marriage_data');
    }
}
