<?php

namespace App\Models\CIT\AT;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FirstYearSecondSemesterAT extends Model
{
    use HasFactory;
    protected $table = 'first_year_second_semesters_a_t';
    protected $fillable = [
        'course_code',
        'description',
        'units',
        'prerequisite',
        'corequisite',
    ];
}
