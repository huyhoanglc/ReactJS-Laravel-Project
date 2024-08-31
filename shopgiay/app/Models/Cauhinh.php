<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cauhinh extends Model
{
    use HasFactory;
    protected $table="cauhinh";
    protected $primaryKey="id";
    protected $fillable=['tieude','tukhoa','mota','tenmien','motabaotri','email','host_mail','pass_mail','youtube','facebook','icon'];
    public $timestamps=false;
}
