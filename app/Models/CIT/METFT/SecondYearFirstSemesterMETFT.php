<?php

namespace App\Models\CIT\METFT;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SecondYearFirstSemesterMETFT extends Model
{
    use HasFactory;

    protected $table = 'second_year_first_semesters_m_e_t_f_t';
    protected $fillable = [
        'course_code',
        'description',
        'units',
        'prerequisite',
        'corequisite',
    ];
}
