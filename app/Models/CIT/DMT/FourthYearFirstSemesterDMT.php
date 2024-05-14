<?php

namespace App\Models\CIT\DMT;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FourthYearFirstSemesterDMT extends Model
{
    use HasFactory;

    protected $table = 'fourth_year_first_semesters_d_m_t';
    protected $fillable = [
        'course_code',
        'description',
        'units',
        'prerequisite',
        'corequisite',
    ];
}
