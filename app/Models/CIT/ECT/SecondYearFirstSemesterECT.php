<?php

namespace App\Models\CIT\ECT;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SecondYearFirstSemesterECT extends Model
{
    use HasFactory;

    protected $table = 'second_year_first_semesters_e_c_t';
    protected $fillable = [
        'course_code',
        'description',
        'units',
        'prerequisite',
        'corequisite',
    ];
}
