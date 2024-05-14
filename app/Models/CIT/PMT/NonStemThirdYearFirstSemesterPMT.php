<?php

namespace App\Models\CIT\PMT;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NonStemThirdYearFirstSemesterPMT extends Model
{
    use HasFactory;
    protected $table = 'non_stem_third_year_first_semesters_p_m_t';
    protected $fillable = [
        'course_code',
        'description',
        'units',
        'prerequisite',
        'corequisite',
    ];
}
