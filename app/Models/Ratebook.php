<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ratebook extends Model
{
    use HasFactory;
    protected $table = 'ratebook';

    protected $fillable = [
       'student_id',
       'group_id',
       'class1',
       'class2',
       'class3',
       'class4',
       'class5',
       'class6',
       'class7',
       'class8',
       'class9',
       'class10',
       'class11',
       'class12'

    ];
    public function group(){
        return $this->belongsTo(Group::class, 'group_id', 'id');
    }
    public function student() {
        return $this->hasMany(Student::class,$foreignKey = 'student_id',$localKey = 'student_id');
        }

}
