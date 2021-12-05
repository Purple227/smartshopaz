<?php

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
            $table->string('username')->unique();
            $table->double('wallet', 8, 2 );
            $table->string('email');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('phone')->nullable();
            $table->string('title')->nullable();
            $table->integer('sponsor_id')->nullable();
            $table->boolean('policy')->default(false);
            $table->boolean('complete_registration')->default(false);
            $table->string('account_type')->nullable();
            $table->string('sponsor_code')->nullable();
            $table->double('monthly_link_bonus', 8, 2 )->nullable();

            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
