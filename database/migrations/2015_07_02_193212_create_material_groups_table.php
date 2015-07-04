<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaterialGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('material_groups', function (Blueprint $table) {
            $table->increments('id');

            $table->string('mat_classe_cod', 10);
            $table->string('mat_classe_desc', 50);
            
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
        Schema::drop('material_groups');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
