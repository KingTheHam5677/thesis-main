<?php

namespace App\Models\CIT\ICT;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NonStemThirdYearFirstSemesterICT extends Model
{
    use HasFactory;
    protected $table = 'non_stem_third_year_first_semesters_i_c_t';
    protected $fillable = [
        'course_code',
        'description',
        'units',
        'prerequisite',
        'corequisite',
    ];
}
