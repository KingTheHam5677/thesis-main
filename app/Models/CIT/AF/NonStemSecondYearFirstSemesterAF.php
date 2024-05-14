<?php

namespace App\Models\CIT\AF;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NonStemSecondYearFirstSemesterAF extends Model
{
    use HasFactory; // Allows the use of Laravel's factory feature for the model
    
    // Define the table associated with the model
    protected $table = 'non_stem_second_year_first_semesters_a_f';
    
    // Specify the attributes that can be mass-assigned
    protected $fillable = [
        'course_code',
        'description',
        'units',
        'prerequisite',
        'corequisite',
    ];
}
