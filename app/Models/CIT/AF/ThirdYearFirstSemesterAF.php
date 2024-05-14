<?php

namespace App\Models\CIT\AF;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThirdYearFirstSemesterAF extends Model
{
    use HasFactory;
    
    // Define the table associated with the model
    protected $table = 'third_year_first_semesters_a_f';
    
    // Specify the attributes that can be mass-assigned
    protected $fillable = [
        'course_code',
        'description',
        'units',
        'prerequisite',
        'corequisite',
    ];
}
