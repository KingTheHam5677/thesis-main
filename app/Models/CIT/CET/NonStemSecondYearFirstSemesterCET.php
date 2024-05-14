<?php

namespace App\Models\CIT\CET;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NonStemSecondYearFirstSemesterCET extends Model
{
    use HasFactory;
    protected $table = 'non_stem_second_year_first_semesters_c_e_t';
    protected $fillable = [
        'course_code',
        'description',
        'units',
        'prerequisite',
        'corequisite',
    ];
}
