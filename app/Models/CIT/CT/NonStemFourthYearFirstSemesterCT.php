<?php

namespace App\Models\CIT\CT;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NonStemFourthYearFirstSemesterCT extends Model
{
    use HasFactory;
    protected $table = 'non_stem_fourth_year_first_semesters_c_t';
    protected $fillable = [
        'course_code',
        'description',
        'units',
        'prerequisite',
        'corequisite',
    ];
}
