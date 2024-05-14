<?php

namespace App\Models\COS\IS;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThirdYearSecondSemesterIS extends Model
{
    use HasFactory;

    protected $table = 'third_year_second_semesters_i_s';
    protected $fillable = [
        'course_code',
        'description',
        'units',
        'prerequisite',
        'corequisite',
    ];
}
