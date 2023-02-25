<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    public function curriculumns() {
        return $this->hasMany(Curriculum::class);
    }

    public function students()
    {
        return $this->belongsToMany(User::class, table:'course_student', foreignPivotKey:'course_id', relatedKey:'user_id');
    }
}
