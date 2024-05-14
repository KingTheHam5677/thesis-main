<?php

namespace App\Models\CIT\MT;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SecondYearFirstSemesterMT extends Model
{
    use HasFactory;

    protected $table = 'second_year_first_semesters_m_t';
    protected $fillable = [
        'course_code',
        'description',
        'units',
        'prerequisite',
        'corequisite',
    ];
}
