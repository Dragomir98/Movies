<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddProducersToMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('movies', function(Blueprint $table) {
            $table->integer('producer_id')
                ->unsigned()->nullable()->default(NULL);
            Schema::disableForeignKeyConstraints();
            $table->foreign('producer_id')
                ->references('id')->on('producers')->onDelete('cascade');
            Schema::enableForeignKeyConstraints();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('movies', function(Blueprint $table) {
            $table->dropForeign('movies_producers_id_foreign');
            $table->dropCOlumn('producer_id');
        });
    }
}
