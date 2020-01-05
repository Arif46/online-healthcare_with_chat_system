<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMainDiseasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('main_diseases', function (Blueprint $table) {
            $table->bigIncrements('id');
          $table->string('disease_name');
           $table->integer('department_id');
          $table->integer('category_id');
          $table->integer('doctor_id');
        
         $table->string('disease_title');
         $table->string('disease_hospital');
         $table->string('hospital_address');
         $table->text('disease_description');
         $table->string('disease_image');
          $table->string('disease_image_1');
 
          $table->SoftDeletes();
          $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('main_diseases');
    }
}
