<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddGenresToMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('movies', function(Blueprint $table) {
            $table->integer('genre_id')
                ->unsigned()->nullable()->default(NULL);
            Schema::disableForeignKeyConstraints();
            $table->foreign('genre_id')
                ->references('id')->on('genres')->onDelete('cascade');
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
            $table->dropForeign('movies_genres_id_foreign');
            $table->dropCOlumn('genre_id');
        });
    }
}
