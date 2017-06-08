<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function(Blueprint $table){
            $table->increments('id');
            $table->string('name');
        });

        Schema::table('users', function(Blueprint $table){
            $table->integer('role_id')->unsigned()->nullable()->after('address');

            $table->foreign('role_id')->references('id')->on('roles')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function(Blueprint $table){
            $table->dropForeign('users_role_id_foreign');
            $table->dropColumn('role_id');
        });

        Schema::drop('roles');
    }
}
