<?php

namespace App\Models\CIT\HV_RT;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NonStemSecondYearFirstSemesterHV_RT extends Model
{
    use HasFactory;
    protected $table = 'non_stem_second_year_first_semesters_hv_rt';
    protected $fillable = [
        'course_code',
        'description',
        'units',
        'prerequisite',
        'corequisite',
    ];
}
