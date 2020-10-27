<?php

use App\Models\Environment;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateEnvironmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('environments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('db_connection');
            $table->string('host');
            $table->string('port');
            $table->string('database');
            $table->string('username');
            $table->string('password');
            $table->timestamps();
        });

        DB::table('environments')->insert([
            ['db_connection' => 'mysql', 'host' => '127.0.0.1', 'port' => '3306', 'database' => 'db1', 'username' => 'user1', 'password'=>'password1'],
            ['db_connection' => 'mysql', 'host' => '127.0.0.1', 'port' => '3306', 'database' => 'db2', 'username' => 'user2', 'password'=>'password2'],
            ['db_connection' => 'mysql', 'host' => '127.0.0.1', 'port' => '3306', 'database' => 'db3', 'username' => 'user3', 'password'=>'password3']
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('environments');
    }
}
