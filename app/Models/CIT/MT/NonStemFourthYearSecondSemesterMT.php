<?php

namespace App\Models\CIT\MT;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NonStemFourthYearSecondSemesterMT extends Model
{
    use HasFactory;
    protected $table = 'non_stem_fourth_year_second_semesters_m_t';
    protected $fillable = [
        'course_code',
        'description',
        'units',
        'prerequisite',
        'corequisite',
    ];
}
