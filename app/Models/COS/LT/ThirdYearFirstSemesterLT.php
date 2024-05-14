<?php

namespace App\Models\COS\LT;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThirdYearFirstSemesterLT extends Model
{
    use HasFactory;
    protected $table = 'third_year_first_semesters_l_t';
    protected $fillable = [
        'course_code',
        'description',
        'units',
        'prerequisite',
        'corequisite',
    ];
}
