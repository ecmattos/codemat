<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiceUnitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_units', function (Blueprint $table)
        {
            $table->increments('id');
            
            $table->string('ua_cod', 10);
            $table->string('ua_desc', 50);
            $table->string('ua_end', 100);
            $table->string('ua_logradouro', 50);
            $table->float('ua_nr_predial', 5,0);
            $table->string('ua_complemento', 10);
            $table->string('ua_bairro', 30);
            $table->string('ua_cep', 9);
            $table->string('ua_fone', 20);
            $table->string('ua_fax', 10);
            $table->string('ua_email', 200);

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('service_units');
    }
}
