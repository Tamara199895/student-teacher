<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Student;
use App\Models\Teacher;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'type'
        ];
        protected $hidden = [
        'password',
        'remember_token',
        ];
        protected $casts = [
        'email_verified_at' => 'datetime',
        ];
        protected function type(): Attribute
        {
        return new Attribute(
        get: fn ($value) =>  ["teacher", "student"][$value],
        );
        }

        public function student() {
        return $this->hasOne(Student::class,$foreignKey = 'student_id',$localKey = 'id');
        }
       public function teacher() {
        return $this->hasOne(Teacher::class,$foreignKey = 'teacher_id',$localKey = 'id');
        }

        }