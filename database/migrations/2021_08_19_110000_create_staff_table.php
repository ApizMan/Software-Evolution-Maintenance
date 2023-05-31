<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Lunar\Base\Migration;

class CreateStaffTable extends Migration
{
    public function up()
    {
        Schema::create($this->prefix.'staff', function (Blueprint $table) {
            $table->id();
            $table->boolean('admin')->default(false)->index();
            $table->string('firstname')->index()->references('id')->on('users')->onDelete('cascade');
            $table->string('lastname')->index()->references('id')->on('users')->onDelete('cascade');
            $table->string('email')->unique()->references('id')->on('users')->onDelete('cascade');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->references('id')->on('users')->onDelete('cascade');
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists($this->prefix.'staff');
    }
}
