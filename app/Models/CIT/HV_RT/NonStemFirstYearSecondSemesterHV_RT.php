<?php

namespace App\Models\CIT\HV_RT;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NonStemFirstYearSecondSemesterHV_RT extends Model
{
    use HasFactory;
    protected $table = 'non_stem_first_year_second_semesters_hv_rt';
    protected $fillable = [
        'course_code',
        'description',
        'units',
        'prerequisite',
        'corequisite',
    ];
}
