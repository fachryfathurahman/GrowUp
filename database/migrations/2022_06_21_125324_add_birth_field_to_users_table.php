<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddBirthFieldToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('id');
            $table->bigIncrements('id');
            $table->enum('gender', ['male', 'female']);
            $table->date('date_of_birth');
            $table->string('city');
            $table->string('districts');
            $table->string('village');
            $table->string('address');
            $table->text('picture');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->id();
            $table->dropColumn('id');
            $table->dropColumn('gender');
            $table->dropColumn('date_of_birth');
            $table->dropColumn('city');
            $table->dropColumn('districts');
            $table->dropColumn('village');
            $table->dropColumn('address');
            $table->dropColumn('picture');
        });
    }
}
