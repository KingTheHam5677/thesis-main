<?php

namespace App\Models\CIT\ICT;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NonStemFourthYearFirstSemesterICT extends Model
{
    use HasFactory;
    protected $table = 'non_stem_fourth_year_first_semesters_i_c_t';
    protected $fillable = [
        'course_code',
        'description',
        'units',
        'prerequisite',
        'corequisite',
    ];
}
