<?php

namespace App\Models\CIT\CT;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThirdYearFirstSemesterCT extends Model
{
    use HasFactory;
    protected $table = 'third_year_first_semesters_c_t';
    protected $fillable = [
        'course_code',
        'description',
        'units',
        'prerequisite',
        'corequisite',
    ];
}
