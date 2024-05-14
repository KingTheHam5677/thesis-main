<?php

namespace App\Models\CIT\MT;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FirstYearSecondSemesterMT extends Model
{
    use HasFactory;

    protected $table = 'first_year_second_semesters_m_t';
    protected $fillable = [
        'course_code',
        'description',
        'units',
        'prerequisite',
        'corequisite',
    ];
}
