<?php

namespace App\Models\CIT\AT;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SecondYearSecondSemesterAT extends Model
{
    use HasFactory;
    protected $table = 'second_year_second_semesters_a_t';
    protected $fillable = [
        'course_code',
        'description',
        'units',
        'prerequisite',
        'corequisite',
    ];
}
