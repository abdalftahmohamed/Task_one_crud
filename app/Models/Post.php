<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    //سلة مهملات
    use SoftDeletes;
//        protected $fillable=['title','body','path'];
    protected $guarded=[];
    // protected $table='Posts_d'; // عشان انا غيرت اسم ال جدول الالي معايا مش نفس اسم الكونترول
    public $timestamps = false;   //لو انا لغيت ال timestamp من الجدول
    //  protected $primaryKey = 'post_id'; //لو انا غيرت ال primary key الالي عندي
    // public $incrementing = false; //disable auto increament
    //using scope in show contorroler
    public function scopeAbdo($query){
        return $query->where('body','abdo');
    }

}
