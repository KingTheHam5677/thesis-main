<?php

namespace App\Models\CIT\WT;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FirstYearFirstSemesterWT extends Model
{
    use HasFactory;

    protected $table = 'first_year_first_semesters_w_t';
    protected $fillable = [
        'course_code',
        'description',
        'units',
        'prerequisite',
        'corequisite',
    ];
}
