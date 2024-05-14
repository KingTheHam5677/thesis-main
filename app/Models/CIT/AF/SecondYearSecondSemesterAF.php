<?php

namespace App\Models\CIT\AF;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SecondYearSecondSemesterAF extends Model
{
    use HasFactory;
    
    // Define the table associated with the model
    protected $table = 'second_year_second_semesters_a_f';
    
    // Specify the attributes that can be mass-assigned
    protected $fillable = [
        'course_code',
        'description',
        'units',
        'prerequisite',
        'corequisite',
    ];
}
