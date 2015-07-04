<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaterialStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('material_statuses', function (Blueprint $table) {
            $table->increments('id');

            $table->string('mat_sit', 5);
            $table->string('mat_sit_desc', 15);
            
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
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::drop('material_statuses');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
