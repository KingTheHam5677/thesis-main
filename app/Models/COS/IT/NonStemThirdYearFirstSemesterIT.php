<?php

namespace App\Models\COS\IT;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NonStemThirdYearFirstSemesterIT extends Model
{
    use HasFactory;
    protected $table = 'non_stem_third_year_first_semesters_i_t';
    protected $fillable = [
        'course_code',
        'description',
        'units',
        'prerequisite',
        'corequisite',
    ];
}
