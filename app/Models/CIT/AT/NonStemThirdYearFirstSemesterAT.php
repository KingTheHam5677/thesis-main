<?php

namespace App\Models\CIT\AT;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NonStemThirdYearFirstSemesterAT extends Model
{
    use HasFactory;
    protected $table = 'non_stem_third_year_first_semesters_a_t';
    protected $fillable = [
        'course_code',
        'description',
        'units',
        'prerequisite',
        'corequisite',
    ];
}
