<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //tao bảng thành viên
        // Schema::create('thanhvien',function(Blueprint $table){
        //     $table->id();
        //     $table->string('hoten',150);
        //     $table->string('hinhanh',150)->nullable(); //không can nhap dk phep rong
        //     $table->string("sdt",30)->nullable();
        //     $table->string("diachi",255)->nullable();  ////không can nhap dk phep rong
        //     $table->string("email",255)->unique();  // khong dk trung email
        //     $table->string("password",255);
        //     $table->string("role",255)->default(0); //phan quyen mac dinh=0 user
        //     $table->tinyInteger("trangthai")->default(1);
        //     $table->rememberToken();
        // });
        
        //bảng cấu hình website
        // Schema::create('cauhinh', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('tieude',150);
        //     $table->string('tukhoa',255)->nullable();
        //     $table->string('mota',255)->nullable();
        //     $table->string('tenmien',100)->nullable();
        //     $table->string('motabaotri',255)->nullable();
        //     $table->string('email',150)->nullable();
        //     $table->string('host_mail',150)->nullable();
        //     $table->string('pass_mail',150)->nullable();
        //     $table->string('youtube',255)->nullable();
        //     $table->string('facebook',255)->nullable();
        //     $table->string('icon',100)->nullable();
        // });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
