<?php

namespace App\Models\COS\IT;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NonStemSecondYearSecondSemesterIT extends Model
{
    use HasFactory;
    protected $table = 'non_stem_second_year_second_semesters_i_t';
    protected $fillable = [
        'course_code',
        'description',
        'units',
        'prerequisite',
        'corequisite',
    ];
}
