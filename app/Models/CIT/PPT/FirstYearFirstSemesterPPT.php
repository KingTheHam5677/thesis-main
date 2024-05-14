<?php

namespace App\Models\CIT\PPT;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FirstYearFirstSemesterPPT extends Model
{
    use HasFactory;

    protected $table = 'first_year_first_semesters_p_p_t';
    protected $fillable = [
        'course_code',
        'description',
        'units',
        'prerequisite',
        'corequisite',
    ];
}
