<?php

namespace App\Models\CIT\ECT;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FourthYearSecondSemesterECT extends Model
{
    use HasFactory;
    protected $table = 'fourth_year_second_semesters_e_c_t';
    protected $fillable = [
        'course_code',
        'description',
        'units',
        'prerequisite',
        'corequisite',
    ];
}
