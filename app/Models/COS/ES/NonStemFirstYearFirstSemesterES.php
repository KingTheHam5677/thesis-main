<?php

namespace App\Models\COS\ES;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NonStemFirstYearFirstSemesterES extends Model
{
    use HasFactory;
    protected $table = 'non_stem_first_year_first_semesters_e_s';
    protected $fillable = [
        'course_code',
        'description',
        'units',
        'prerequisite',
        'corequisite',
    ];
}
