<?php

namespace App\Models\COS\IS;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SecondYearFirstSemesterIS extends Model
{
    use HasFactory;

    protected $table = 'second_year_first_semesters_i_s';
    protected $fillable = [
        'course_code',
        'description',
        'units',
        'prerequisite',
        'corequisite',
    ];
}
