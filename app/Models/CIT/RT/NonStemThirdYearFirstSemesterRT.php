<?php

namespace App\Models\CIT\RT;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NonStemThirdYearFirstSemesterRT extends Model
{
    use HasFactory;
    protected $table = 'non_stem_third_year_first_semesters_r_t';
    protected $fillable = [
        'course_code',
        'description',
        'units',
        'prerequisite',
        'corequisite',
    ];
}
