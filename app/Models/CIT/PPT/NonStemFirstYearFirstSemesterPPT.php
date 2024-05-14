<?php

namespace App\Models\CIT\PPT;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NonStemFirstYearFirstSemesterPPT extends Model
{
    use HasFactory;
    protected $table = 'non_stem_first_year_first_semesters_p_p_t';
    protected $fillable = [
        'course_code',
        'description',
        'units',
        'prerequisite',
        'corequisite',
    ];
}
