<?php

namespace App\Models\CIT\PMT;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SecondYearSecondSemesterPMT extends Model
{
    use HasFactory;
    protected $table = 'second_year_second_semesters_p_m_t';
    protected $fillable = [
        'course_code',
        'description',
        'units',
        'prerequisite',
        'corequisite',
    ];
}
