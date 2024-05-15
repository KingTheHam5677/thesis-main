<?php

namespace App\Models\CIT\HVRT;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NonStemSecondYearFirstSemesterHVRT extends Model
{
    use HasFactory;
    protected $table = 'non_stem_second_year_first_semesters_HVRT';
    protected $fillable = [
        'course_code',
        'description',
        'units',
        'prerequisite',
        'corequisite',
    ];
}
