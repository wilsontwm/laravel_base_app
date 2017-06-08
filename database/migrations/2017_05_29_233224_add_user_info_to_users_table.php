<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\User;

class AddUserInfoToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function(Blueprint $table){
            $table->longText('bio')->nullable()->after('image_url');
            $table->tinyInteger('gender')->default(User::GENDER_UNSPECIFIED)->after('image_url');
            $table->date('birthday')->nullable()->after('image_url');
            $table->string('country',2)->nullable()->after('image_url');
            $table->longText('address')->nullable()->after('image_url');
            $table->string('phone')->nullable()->after('image_url');
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
            $table->dropColumn('phone');
            $table->dropColumn('address');
            $table->dropColumn('country');
            $table->dropColumn('birthday');
            $table->dropColumn('gender');
            $table->dropColumn('bio');
        });
    }
}
