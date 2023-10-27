<?php

namespace App\Models;

use App\Models\User;
use App\Models\Group;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Teacher extends Model
{
    use HasFactory;
    protected $table = 'teacher';

    protected $fillable = [
        'teacher_id'
    ];

    public function user(){
        return $this->belongsTo(User::class, 'teacher_id', 'id');
    }
    public function group()
    {
        return $this->hasMany(Group::class, $foreignKey = 'teacher_id',$localKey = 'teacher_id');
    }
}
