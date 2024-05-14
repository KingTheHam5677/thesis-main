<?php

namespace App\Models\CIT\PPT;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SecondYearFirstSemesterPPT extends Model
{
    use HasFactory;

    protected $table = 'second_year_first_semesters_p_p_t';
    protected $fillable = [
        'course_code',
        'description',
        'units',
        'prerequisite',
        'corequisite',
    ];
}
