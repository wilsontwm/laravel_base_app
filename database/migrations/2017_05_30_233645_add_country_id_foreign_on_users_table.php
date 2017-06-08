<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCountryIdForeignOnUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function(Blueprint $table){
            $table->dropColumn('country');
            $table->integer('country_id')->nullable()->unsigned()->after('address');

            $table->foreign('country_id')->references('id')->on('countries')->onDelete('set null');
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
            $table->dropForeign('users_country_id_foreign');
            $table->dropColumn('country_id');
            $table->string('country',2)->nullable()->after('address');

        });
    }
}
