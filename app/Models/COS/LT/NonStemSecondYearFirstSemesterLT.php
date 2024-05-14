<?php

namespace App\Models\COS\LT;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NonStemSecondYearFirstSemesterLT extends Model
{
    use HasFactory;
    protected $table = 'non_stem_second_year_first_semesters_l_t';
    protected $fillable = [
        'course_code',
        'description',
        'units',
        'prerequisite',
        'corequisite',
    ];
}
