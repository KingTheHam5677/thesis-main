<?php

namespace App\Models\CIT\DMT;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NonStemThirdYearSecondSemesterDMT extends Model
{
    use HasFactory;
    protected $table = 'non_stem_third_year_second_semesters_d_m_t';
    protected $fillable = [
        'course_code',
        'description',
        'units',
        'prerequisite',
        'corequisite',
    ];
}
