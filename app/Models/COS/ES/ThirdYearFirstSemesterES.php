<?php

namespace App\Models\COS\ES;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThirdYearFirstSemesterES extends Model
{
    use HasFactory;
    protected $table = 'third_year_first_semesters_e_s';
    protected $fillable = [
        'course_code',
        'description',
        'units',
        'prerequisite',
        'corequisite',
    ];
}
