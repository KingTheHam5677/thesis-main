<?php

namespace App\Models\CIT\HV_RT;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NonStemSecondYearSecondSemesterHV_RT extends Model
{
    use HasFactory;
    protected $table = 'non_stem_second_year_second_semesters_hv_rt';
    protected $fillable = [
        'course_code',
        'description',
        'units',
        'prerequisite',
        'corequisite',
    ];
}
