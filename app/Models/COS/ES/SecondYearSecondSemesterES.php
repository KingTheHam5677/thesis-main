<?php

namespace App\Models\COS\ES;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SecondYearSecondSemesterES extends Model
{
    use HasFactory;
    protected $table = 'second_year_second_semesters_e_s';
    protected $fillable = [
        'course_code',
        'description',
        'units',
        'prerequisite',
        'corequisite',
    ];
}
