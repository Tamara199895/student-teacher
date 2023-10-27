<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{

    use HasFactory;
    protected $table = 'student';

    protected $fillable = [
       'student_id'
    ];

    public function user(){
        return $this->belongsTo(User::class, 'student_id', 'id');
    }
    public function group()
    {
        return $this->hasOne(Group::class, $foreignKey = 'id',$localKey = 'group_id');
    }
}
