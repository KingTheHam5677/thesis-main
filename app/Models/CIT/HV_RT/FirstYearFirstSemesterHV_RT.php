<?php

namespace App\Models\CIT\HVRT;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FirstYearFirstSemesterHVRT extends Model
{
    use HasFactory;
    protected $table = 'first_year_first_semesters_HVRT';
    protected $fillable = [
        'course_code',
        'description',
        'units',
        'prerequisite',
        'corequisite',
    ];
}
