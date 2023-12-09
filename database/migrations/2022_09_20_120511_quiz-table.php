<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class QuizTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    { Schema::create('quizz', function (Blueprint $table) {
        $table->id();
        $table->string('language');
        $table->string('question');
        $table->string('choixA');
        $table->string('choixB');
        $table->string('choixC');
        $table->string('choixD');
        $table->string('reponse');
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
        //
    }
}
