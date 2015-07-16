<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCityServiceUnitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('service_units', function (Blueprint $table) 
        {
            $table->integer('ua_uf_id')->unsigned()->after('id')->default(1);
            $table->foreign('ua_uf_id')->references('id')->on('states');

            $table->integer('ua_cidade_id')->unsigned()->after('ua_uf_id')->default(1);
            $table->foreign('ua_cidade_id')->references('id')->on('cities');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('service_units', function (Blueprint $table) 
        {
            $table->removeColumn('ua_uf_id');
            $table->removeColumn('ua_cidade_id');
        });
    }
}
