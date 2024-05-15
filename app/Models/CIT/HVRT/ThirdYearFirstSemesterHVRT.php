<?php

namespace App\Models\CIT\HVRT;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThirdYearFirstSemesterHVRT extends Model
{
    use HasFactory;
    protected $table = 'third_year_first_semesters_HVRT';
    protected $fillable = [
        'course_code',
        'description',
        'units',
        'prerequisite',
        'corequisite',
    ];
}
