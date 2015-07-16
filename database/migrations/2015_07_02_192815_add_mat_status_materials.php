<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMatStatusMaterials extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('materials', function (Blueprint $table) {
            $table->integer('mat_sit_id')->unsigned()->default(1)->after('mat_tipo_id');
            $table->foreign('mat_sit_id')->references('id')->on('material_statuses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('materials', function (Blueprint $table) {
            //
            $table->removeColumn('mat_sit_id');
        });
    }
}
