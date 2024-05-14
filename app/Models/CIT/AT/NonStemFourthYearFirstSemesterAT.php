<?php

namespace App\Models\CIT\AT;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NonStemFourthYearFirstSemesterAT extends Model
{
    use HasFactory;
    protected $table = 'non_stem_fourth_year_first_semesters_a_t';
    protected $fillable = [
        'course_code',
        'description',
        'units',
        'prerequisite',
        'corequisite',
    ];
}
