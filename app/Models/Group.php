<?php

namespace App\Models;

use App\Models\Student;
use App\Models\Ratebook;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Group extends Model
{
    use HasFactory;
    protected $table = 'group';

    protected $fillable = [
       'name',
       'teacher_id'
    ];

    public function student()
    {
        return $this->hasMany(Student::class,$foreignKey = 'student_id',$localKey = 'student_id');
    }
    public function retebook() {
        return $this->hasMany(Ratebook::class,$foreignKey = 'group_id',$localKey = 'id');
        }
}
