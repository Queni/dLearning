<?php namespace Queni\DLearning\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateTestsTable extends Migration
{
    public function up()
    {
        Schema::create('queni_dlearning_tests', function(Blueprint $table) {
            Schema::dropIfExists('queni_dlearning_tests');
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name', 200);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('queni_dlearning_tests');
    }
}
