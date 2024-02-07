<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Teacher extends Model
{
    use HasFactory;

    public function classroom(): HasOne
    {
        return $this->hasOne(Classroom::class);
    }

    public function teacherSubject(): HasMany
    {
        return $this->hasMany(TeacherSubject::class);
    }

}
