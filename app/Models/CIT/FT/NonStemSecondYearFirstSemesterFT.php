<?php

namespace App\Models\CIT\FT;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NonStemSecondYearFirstSemesterFT extends Model
{
    use HasFactory;
    protected $fillable = [
        'course_code',
        'description',
        'units',
        'prerequisite',
        'corequisite',
    ];
}