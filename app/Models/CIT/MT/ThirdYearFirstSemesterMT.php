<?php

namespace App\Models\CIT\MT;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThirdYearFirstSemesterMT extends Model
{
    use HasFactory;
    protected $table = 'third_year_first_semesters_m_t';
    protected $fillable = [
        'course_code',
        'description',
        'units',
        'prerequisite',
        'corequisite',
    ];
}
