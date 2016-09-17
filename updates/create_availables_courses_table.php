<?php namespace Queni\DLearning\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateAvailablesCoursesTable extends Migration
{
    public function up()
    {
        Schema::create('queni_dlearning_availables_courses', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('queni_dlearning_availables_courses');
    }
}
