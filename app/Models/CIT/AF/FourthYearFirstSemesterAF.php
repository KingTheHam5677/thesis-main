<?php

namespace App\Models\CIT\AF;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FourthYearFirstSemesterAF extends Model
{
    use HasFactory;
    protected $table = 'fourth_year_first_semesters_a_f';

    protected $fillable = [
        'course_code',
        'description',
        'units',
        'prerequisite',
        'corequisite',
    ];
}
