<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    protected string $table = 'users';
    public function up()
    {
        if(Schema::hasTable($this->table)){
            if(!Schema::hasColumn('id')){
                Schema::table($this->table, function (Blueprint $table){
                   $table->id();
                });
            }
            if(!Schema::hasColumn('name')){
                Schema::table($this->table, function (Blueprint $table){
                    $table->string('name');
                });
            }
            if(!Schema::hasColumn('name')){
                Schema::table($this->table, function (Blueprint $table){
                    $table->string('name');
                });
            }
            if(!Schema::hasColumn('email')){
                Schema::table($this->table, function (Blueprint $table){
                    $table->string('email')->unique();
                });
            }
            if(!Schema::hasColumn('password')){
                Schema::table($this->table, function (Blueprint $table){
                    $table->string('password');
                });
            }
        }else{
            Schema::create($this->table, function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->string('email')->unique();
                $table->timestamp('email_verified_at')->nullable();
                $table->string('password');
                $table->rememberToken();
                $table->timestamps();
            });
        }
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
};
