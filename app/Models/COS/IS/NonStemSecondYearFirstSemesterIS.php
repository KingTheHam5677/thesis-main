<?php

namespace App\Models\COS\IS;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NonStemSecondYearFirstSemesterIS extends Model
{
    use HasFactory;
    protected $table = 'non_stem_second_year_first_semesters_i_s';
    protected $fillable = [
        'course_code',
        'description',
        'units',
        'prerequisite',
        'corequisite',
    ];
}
