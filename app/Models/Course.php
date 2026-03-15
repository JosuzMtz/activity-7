<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    //^^^ ocupa saber que tiene un factory al parecer ^^^
    protected $fillable = [
        'course_key',
        'title',
        'cover_image',
        'content',
        'material',
        'kit_id'];
        
    public function kit() {
        return $this->belongsTo(Kit::class);
    }

    public function studentGroups() {
        return $this->belongsToMany(StudentGroup::class, 'course_student_groups');
    }
}
