<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMenambahkanforeignkeyToKomentarjawabanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('komentarjawaban', function (Blueprint $table) {
            //
            $table->unsignedBigInteger('jawaban_id');

            $table->foreign('jawaban_id')->references('id')->on('jawaban');

            $table->unsignedBigInteger('profile_id');

            $table->foreign('profile_id')->references('id')->on('profile');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $table->dropForeign(['jawaban_id']);
        $table->dropColumn('jawaban_id');
        $table->dropForeign(['profile_id']);
        $table->dropColumn('profile_id');
    }
}
