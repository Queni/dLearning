<?php namespace Queni\DLearning\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateCategoriesTable extends Migration
{
    public function up()
    {
        Schema::create('queni_dlearning_categories', function(Blueprint $table) {
            Schema::dropIfExists('queni_dlearning_categories');
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title')->unique();
            $table->string('slug')->index();
            $table->integer('parent_category_id')->unsigned()->nullable();

            $table->foreign('parent_category_id')
                    ->references('id')->on('queni_dlearning_categories')
                    ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('queni_dlearning_categories');
    }
}
