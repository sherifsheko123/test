<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Courses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function(Blueprint $table){
            $table->increments( 'id' );
            $table->string( 'course_name' , 50 ) ;
            $table->string( 'description' , 50 ) ;
            $table->string( 'start_at' , 100 );
            $table->string( 'end_at' , 500 );
            $table->string( 'total_hours' , 15 );
            $table->string( 'hours_per_session' , 500 );
            $table->rememberToken( );
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
