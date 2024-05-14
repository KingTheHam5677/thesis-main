<?php

namespace App\Models\COS\IT;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FourthYearFirstSemesterIT extends Model
{
    use HasFactory;
    protected $table = 'fourth_year_first_semesters_i_t';

    protected $fillable = [
        'course_code',
        'description',
        'units',
        'prerequisite',
        'corequisite',
    ];
}
