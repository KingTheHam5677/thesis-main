<?php

namespace App\Models\CIT\CET;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FirstYearSecondSemesterCET extends Model
{
    use HasFactory;

    protected $table = 'first_year_second_semesters_c_e_t';
    protected $fillable = [
        'course_code',
        'description',
        'units',
        'prerequisite',
        'corequisite',
    ];
}
