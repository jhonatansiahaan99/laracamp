<?php

use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable(); //nullable fungsi nya ketika login dengan oauth google, ketentuan nya google tidak dapat mengisi jadi di buat boleh tidak disi alias kosong
            $table->string('avatar')->nullable(); //nullable fungsi nya ketika login dengan oauth google, ketentuan nya google tidak dapat mengisi jadi di buat boleh tidak disi alias kosong
            $table->string('occupaction')->nullable(); //nullable fungsi nya ketika login dengan oauth google, ketentuan nya google tidak dapat mengisi jadi di buat boleh tidak disi alias kosong
            $table->boolean("is_admin")->default(false); //kenapa false karna disini kita utama si user biasa yang arti karna bukan admin. kalo admin kita bisa buat nanti true
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes(); //softDelete dibuat supaya bisa mengetahui kapan di hapus delete at seperti create at,update at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
