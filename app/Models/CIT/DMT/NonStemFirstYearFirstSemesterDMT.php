<?php

namespace App\Models\CIT\DMT;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NonStemFirstYearFirstSemesterDMT extends Model
{
    use HasFactory;
    protected $table = 'non_stem_first_year_first_semesters_d_m_t';
    protected $fillable = [
        'course_code',
        'description',
        'units',
        'prerequisite',
        'corequisite',
    ];
}
