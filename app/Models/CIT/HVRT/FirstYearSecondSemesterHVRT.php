<?php

namespace App\Models\CIT\HVRT;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FirstYearSecondSemesterHVRT extends Model
{
    use HasFactory;
    protected $table = 'first_year_second_semesters_HVRT';
    protected $fillable = [
        'course_code',
        'description',
        'units',
        'prerequisite',
        'corequisite',
    ];
}
