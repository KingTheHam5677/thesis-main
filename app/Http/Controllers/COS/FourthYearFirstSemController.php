<?php

namespace App\Http\Controllers\COS;

use App\Http\Resources\FourthYearFirstSemResource;
use App\Models\COS\CS\FourthYearFirstSemester;
use App\Models\COS\CS\NonStemFourthYearFirstSemester;
use App\Models\COS\IS\FourthYearFirstSemesterIS;
use App\Models\COS\IS\NonStemFourthYearFirstSemesterIS;
use App\Models\COS\IT\FourthYearFirstSemesterIT;
use App\Models\COS\IT\NonStemFourthYearFirstSemesterIT;
use App\Models\COS\ES\FourthYearFirstSemesterES;
use App\Models\COS\ES\NonStemFourthYearFirstSemesterES;
use App\Models\COS\LT\FourthYearFirstSemesterLT;
use App\Models\COS\LT\NonStemFourthYearFirstSemesterLT;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFourthYearFirstSemesterRequest;
use App\Http\Requests\UpdateFourthYearFirstSemesterRequest;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Validator; // Import Validator facade

class FourthYearFirstSemController extends Controller
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
            'CSStem' => "Semester/COS/CS/CreateFourthYearFirstSem",
            'CSNonstem' => "Semester/COS/CS/CreateFourthYearFirstSemNonstem",
            'ISStem' => "Semester/COS/IS/CreateFourthYearFirstSem",
            'ISNonstem' => "Semester/COS/IS/CreateFourthYearFirstSemNonstem",
            'ITStem' => "Semester/COS/IT/CreateFourthYearFirstSem",
            'ITNonstem' => "Semester/COS/IT/CreateFourthYearFirstSemNonstem",
            'ESStem' => "Semester/COS/ES/CreateFourthYearFirstSem",
            'ESNonstem' => "Semester/COS/ES/CreateFourthYearFirstSemNonstem",
            'LTStem' => "Semester/COS/LT/CreateFourthYearFirstSem",
            'LTNonstem' => "Semester/COS/LT/CreateFourthYearFirstSemNonstem",
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
    public function store(StoreFourthYearFirstSemesterRequest $request)
    {
        $source = $request->query('source');

        // Define a mapping of source to models
        $modelMapping = [
            'CSStem' => FourthYearFirstSemester::class,
            'CSNonstem' => NonStemFourthYearFirstSemester::class,
            'ISStem' => FourthYearFirstSemesterIS::class,
            'ISNonstem' => NonStemFourthYearFirstSemesterIS::class,
            'ITStem' => FourthYearFirstSemesterIT::class,
            'ITNonstem' => NonStemFourthYearFirstSemesterIT::class,
            'ESStem' => FourthYearFirstSemesterES::class,
            'ESNonstem' => NonStemFourthYearFirstSemesterES::class,
            'LTStem' => FourthYearFirstSemesterLT::class,
            'LTNonstem' => NonStemFourthYearFirstSemesterLT::class,
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
    public function show(FourthYearFirstSemester $fourthYearFirstSemester)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FourthYearFirstSemester $fourthYearFirstSemester)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFourthYearFirstSemesterRequest $request, FourthYearFirstSemester $fourthYearFirstSemester)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FourthYearFirstSemester $fourthYearFirstSemester)
    {
        //
    }
}
