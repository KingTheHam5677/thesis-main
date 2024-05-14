<?php

namespace App\Models\CIT\WT;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FourthYearSecondSemesterWT extends Model
{
    use HasFactory;
    protected $table = 'fourth_year_second_semesters_w_t';
    protected $fillable = [
        'course_code',
        'description',
        'units',
        'prerequisite',
        'corequisite',
    ];
}
