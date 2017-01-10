<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('content');
            $table->string('name');
            $table->string('lang');
            $table->timestamps();
        });
        DB::table('pages')->insert(array(
            'content' => '<h1>Hem content not set</h1>',
            'name' => 'Welcome',
            'lang' => 'en',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('pages')->insert(array(
            'content' => '<h1>Hem Inget innehåll</h1>',
            'name' => 'Welcome',
            'lang' => 'se',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('pages')->insert(array(
            'content' => '<h1>Coaching content is not set yet!</h1>',
            'name' => 'Coaching',
            'lang' => 'en',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('pages')->insert(array(
            'content' => '<h1>Coaching har inget innehåll</h1>',
            'name' => 'Coaching',
            'lang' => 'se',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('pages')->insert(array(
            'content' => '<h1>Contact har inget innehåll</h1>',
            'name' => 'Contact',
            'lang' => 'se',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('pages')->insert(array(
            'content' => '<h1>Contact does not have any content</h1>',
            'name' => 'Contact',
            'lang' => 'en',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('pages')->insert(array(
            'content' => '<h1>Kurser har inget innehåll</h1>',
            'name' => 'Courses',
            'lang' => 'se',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('pages')->insert(array(
            'content' => '<h1>Courses does not have any content</h1>',
            'name' => 'Courses',
            'lang' => 'en',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('pages')->insert(array(
            'content' => '<h1>Priser har inget innehåll</h1>',
            'name' => 'Prices',
            'lang' => 'se',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('pages')->insert(array(
            'content' => '<h1>Prices does not have any content</h1>',
            'name' => 'Prices',
            'lang' => 'en',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('pages')->insert(array(
            'content' => '<h1>Behandling har inget innehåll</h1>',
            'name' => 'Treatment',
            'lang' => 'se',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('pages')->insert(array(
            'content' => '<h1>Treatment does not have any content</h1>',
            'name' => 'Treatment',
            'lang' => 'en',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('pages')->insert(array(
            'content' => '<h1>About Anna content not set</h1>',
            'name' => 'About',
            'lang' => 'en',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));
        DB::table('pages')->insert(array(
            'content' => '<h1>Om anna Inget innehåll</h1>',
            'name' => 'About',
            'lang' => 'se',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pages');
    }
}
