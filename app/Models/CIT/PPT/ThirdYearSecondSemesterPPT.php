<?php

namespace App\Models\CIT\PPT;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThirdYearSecondSemesterPPT extends Model
{
    use HasFactory;

    protected $table = 'third_year_second_semesters_p_p_t';
    protected $fillable = [
        'course_code',
        'description',
        'units',
        'prerequisite',
        'corequisite',
    ];
}
