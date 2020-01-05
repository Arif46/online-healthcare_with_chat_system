<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoctorsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('doctors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('doctor_expart_category_id');
            $table->string('doctor_name');
            $table->integer('department_id');
            $table->string('graduate_institude');
            $table->string('present_hospital');
            $table->string('doctor_graduate');
            $table->string('doctor_exprience');
            $table->longtext('doctor_address');
            $table->longtext('doctor_description');
            $table->string('doctor_image');
            $table->SoftDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('doctors');
    }

}
