<?php

namespace App\Models\CIT\ET;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FourthYearSecondSemesterET extends Model
{
    use HasFactory;
    protected $table = 'fourth_year_second_semesters_e_t';
    protected $fillable = [
        'course_code',
        'description',
        'units',
        'prerequisite',
        'corequisite',
    ];
}
