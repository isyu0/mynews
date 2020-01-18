<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();

/*Laravel14課題4 create_profiles_table というMigrationの雛形ファイルを作成し、
profilesというテーブル名で名前(name)、性別(gender)、趣味(hobby)、
自己紹介(introduction)を保存できるように修正して、migrateしてテーブルを作成しましょう。*/            
            
            $table->string('name');  //名前を保存するカラム(入力必須）
            $table->string('gender');//性別を保存するカラム(入力必須）  
            $table->string('hobby'); // 趣味を保存するカラム(入力必須）
            $table->string('introduction'); // 自己紹介を保存するカラム(入力必須）
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}
