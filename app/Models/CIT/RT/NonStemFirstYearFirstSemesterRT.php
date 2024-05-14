<?php

namespace App\Models\CIT\RT;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NonStemFirstYearFirstSemesterRT extends Model
{
    use HasFactory;
    protected $table = 'non_stem_first_year_first_semesters_r_t';
    protected $fillable = [
        'course_code',
        'description',
        'units',
        'prerequisite',
        'corequisite',
    ];
}
