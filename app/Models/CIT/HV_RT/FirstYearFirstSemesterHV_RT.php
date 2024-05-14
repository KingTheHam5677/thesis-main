<?php

namespace App\Models\CIT\HV_RT;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FirstYearFirstSemesterHV_RT extends Model
{
    use HasFactory;
    protected $table = 'first_year_first_semesters_hv_rt';
    protected $fillable = [
        'course_code',
        'description',
        'units',
        'prerequisite',
        'corequisite',
    ];
}
