<?php

namespace App\Models\CIT\CT;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SecondYearSecondSemesterCT extends Model
{
    use HasFactory;
    protected $table = 'second_year_second_semesters_c_t';
    protected $fillable = [
        'course_code',
        'description',
        'units',
        'prerequisite',
        'corequisite',
    ];
}
