<?php

namespace App\Models\CIT\ET;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FirstYearFirstSemesterET extends Model
{
    use HasFactory;
    protected $table = 'first_year_first_semesters_e_t';
    protected $fillable = [
        'course_code',
        'description',
        'units',
        'prerequisite',
        'corequisite',
    ];
}
