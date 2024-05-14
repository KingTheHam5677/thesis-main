<?php

namespace App\Models\CIT\ICT;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThirdYearSecondSemesterICT extends Model
{
    use HasFactory;

    protected $table = 'third_year_second_semesters_i_c_t';
    protected $fillable = [
        'course_code',
        'description',
        'units',
        'prerequisite',
        'corequisite',
    ];
}
