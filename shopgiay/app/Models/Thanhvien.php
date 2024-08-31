<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Thanhvien extends Authenticatable
{
    use HasFactory, Notifiable;
    protected $table="thanhvien";
    protected $primaryKey="id";
    protected $fillable=['hoten','hinhanh','sdt','diachi','email','role','trangthai'];

    protected $hidden=[
        'password','remember_token',
    ];
    public $timestamps=false;
}
