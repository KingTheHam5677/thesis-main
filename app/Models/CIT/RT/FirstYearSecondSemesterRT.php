<?php

namespace App\Models\CIT\RT;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FirstYearSecondSemesterRT extends Model
{
    use HasFactory;

    protected $table = 'first_year_second_semesters_r_t';
    protected $fillable = [
        'course_code',
        'description',
        'units',
        'prerequisite',
        'corequisite',
    ];
}
