<?php

namespace App\Models\CIT\WT;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThirdYearFirstSemesterWT extends Model
{
    use HasFactory;
    protected $table = 'third_year_first_semesters_w_t';
    protected $fillable = [
        'course_code',
        'description',
        'units',
        'prerequisite',
        'corequisite',
    ];
}
