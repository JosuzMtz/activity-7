<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentGroup extends Model
{
    //
    public function courses(){
        return $this->belongsToMany(Course::class, 'course_student_groups');

    }
    public function users(){
        return $this->belongsToMany(User::class, 'student_group_users');
    }
}
