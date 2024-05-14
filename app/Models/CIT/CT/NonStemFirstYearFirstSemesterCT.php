<?php

namespace App\Models\CIT\CT;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NonStemFirstYearFirstSemesterCT extends Model
{
    use HasFactory;
    protected $table = 'non_stem_first_year_first_semesters_c_t';
    protected $fillable = [
        'course_code',
        'description',
        'units',
        'prerequisite',
        'corequisite',
    ];
}
