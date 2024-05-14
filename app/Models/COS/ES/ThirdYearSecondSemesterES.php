<?php

namespace App\Models\COS\ES;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThirdYearSecondSemesterES extends Model
{
    use HasFactory;

    protected $table = 'third_year_second_semesters_e_s';
    protected $fillable = [
        'course_code',
        'description',
        'units',
        'prerequisite',
        'corequisite',
    ];
}
