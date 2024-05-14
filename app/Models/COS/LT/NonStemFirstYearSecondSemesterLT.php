<?php

namespace App\Models\COS\LT;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NonStemFirstYearSecondSemesterLT extends Model
{
    use HasFactory;
    protected $table = 'non_stem_first_year_second_semesters_l_t';
    protected $fillable = [
        'course_code',
        'description',
        'units',
        'prerequisite',
        'corequisite',
    ];
}
