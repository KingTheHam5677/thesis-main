<?php

namespace App\Http\Controllers\COS;

use App\Http\Resources\FourthYearSecondSemResource;
use App\Models\COS\CS\FourthYearSecondSemester;
use App\Models\COS\CS\NonStemFourthYearSecondSemester;
use App\Models\COS\IS\FourthYearSecondSemesterIS;
use App\Models\COS\IS\NonStemFourthYearSecondSemesterIS;
use App\Models\COS\IT\FourthYearSecondSemesterIT;
use App\Models\COS\IT\NonStemFourthYearSecondSemesterIT;
use App\Models\COS\ES\FourthYearSecondSemesterES;
use App\Models\COS\ES\NonStemFourthYearSecondSemesterES;
use App\Models\COS\LT\FourthYearSecondSemesterLT;
use App\Models\COS\LT\NonStemFourthYearSecondSemesterLT;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFourthYearSecondSemesterRequest;
use App\Http\Requests\UpdateFourthYearSecondSemesterRequest;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Validator; // Import Validator facade

class FourthYearSecondSemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $source = $request->query('source');

        // Define a mapping of source to views
        $viewMapping = [
            'CSStem' => "Semester/COS/CS/CreateFourthYearSecondSem",
            'CSNonstem' => "Semester/COS/CS/CreateFourthYearSecondSemNonstem",
            'ISStem' => "Semester/COS/IS/CreateFourthYearSecondSem",
            'ISNonstem' => "Semester/COS/IS/CreateFourthYearSecondSemNonstem",
            'ITStem' => "Semester/COS/IT/CreateFourthYearSecondSem",
            'ITNonstem' => "Semester/COS/IT/CreateFourthYearSecondSemNonstem",
            'ESStem' => "Semester/COS/ES/CreateFourthYearSecondSem",
            'ESNonstem' => "Semester/COS/ES/CreateFourthYearSecondSemNonstem",
            'LTStem' => "Semester/COS/LT/CreateFourthYearSecondSem",
            'LTNonstem' => "Semester/COS/LT/CreateFourthYearSecondSemNonstem",
        ];

        // Check if the source is valid
        if (!array_key_exists($source, $viewMapping)) {
            abort(404, 'Invalid source');
        }

        // Render the appropriate view based on the source
        return Inertia::render($viewMapping[$source]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFourthYearSecondSemesterRequest $request)
    {
        $source = $request->query('source');

        // Define a mapping of source to models
        $modelMapping = [
            'CSStem' => FourthYearSecondSemester::class,
            'CSNonstem' => NonStemFourthYearSecondSemester::class,
            'ISStem' => FourthYearSecondSemesterIS::class,
            'ISNonstem' => NonStemFourthYearSecondSemesterIS::class,
            'ITStem' => FourthYearSecondSemesterIT::class,
            'ITNonstem' => NonStemFourthYearSecondSemesterIT::class,
            'ESStem' => FourthYearSecondSemesterES::class,
            'ESNonstem' => NonStemFourthYearSecondSemesterES::class,
            'LTStem' => FourthYearSecondSemesterLT::class,
            'LTNonstem' => NonStemFourthYearSecondSemesterLT::class,
        ];

        // Validate source
        if (!array_key_exists($source, $modelMapping)) {
            abort(404, 'Invalid source');
        }

        // Validate request data
        $validatedData = Validator::make($request->data, [
            'course_code' => 'required|string',
            'description' => 'required|string',
            'units' => 'required|numeric',
            'prerequisite' => 'nullable|string',
            'corequisite' => 'nullable|string',
        ])->validate();

        // Create and save the record using the appropriate model
        $modelClass = $modelMapping[$source];
        $record = new $modelClass($validatedData);
        $record->save();

        // Redirect to the appropriate route after successful save
        return redirect()->route('admin.curriculum');
    }

    /**
     * Display the specified resource.
     */
    public function show(FourthYearSecondSemester $fourthYearSecondSemester)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FourthYearSecondSemester $fourthYearSecondSemester)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFourthYearSecondSemesterRequest $request, FourthYearSecondSemester $fourthYearSecondSemester)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FourthYearSecondSemester $fourthYearSecondSemester)
    {
        //
    }
}
