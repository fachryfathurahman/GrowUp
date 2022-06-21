<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChildsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('childs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('parents_id');
            $table->string('name');
            $table->integer('age');
            $table->integer('height');
            $table->integer('weight');
            $table->enum('gender', ['male', 'female']);
            $table->date('date_of_birth');
            $table->text('picture');
            $table->enum('premature', [0,1]);
            $table->integer('head');
            $table->string('blood');
            $table->string('allergy');
            $table->integer('mother_height');
            $table->integer('father_height');
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
        Schema::dropIfExists('childs');
    }
}
