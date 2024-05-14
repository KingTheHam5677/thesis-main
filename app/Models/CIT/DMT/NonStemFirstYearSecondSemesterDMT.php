<?php

namespace App\Models\CIT\DMT;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NonStemFirstYearSecondSemesterDMT extends Model
{
    use HasFactory;
    protected $table = 'non_stem_first_year_second_semesters_d_m_t';
    protected $fillable = [
        'course_code',
        'description',
        'units',
        'prerequisite',
        'corequisite',
    ];
}
