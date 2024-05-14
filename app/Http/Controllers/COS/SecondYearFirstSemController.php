<?php

namespace App\Http\Controllers\COS;

use App\Http\Resources\SecondYearFirstSemResource;
use App\Models\COS\CS\SecondYearFirstSemester;
use App\Models\COS\CS\NonStemSecondYearFirstSemester;
use App\Models\COS\IS\SecondYearFirstSemesterIS;
use App\Models\COS\IS\NonStemSecondYearFirstSemesterIS;
use App\Models\COS\IT\SecondYearFirstSemesterIT;
use App\Models\COS\IT\NonStemSecondYearFirstSemesterIT;
use App\Models\COS\ES\SecondYearFirstSemesterES;
use App\Models\COS\ES\NonStemSecondYearFirstSemesterES;
use App\Models\COS\LT\SecondYearFirstSemesterLT;
use App\Models\COS\LT\NonStemSecondYearFirstSemesterLT;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSecondYearFirstSemesterRequest;
use App\Http\Requests\UpdateSecondYearFirstSemesterRequest;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Validator; // Import Validator facade

class SecondYearFirstSemController extends Controller
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
            'CSStem' => "Semester/COS/CS/CreateSecondYearFirstSem",
            'CSNonstem' => "Semester/COS/CS/CreateSecondYearFirstSemNonstem",
            'ISStem' => "Semester/COS/IS/CreateSecondYearFirstSem",
            'ISNonstem' => "Semester/COS/IS/CreateSecondYearFirstSemNonstem",
            'ITStem' => "Semester/COS/IT/CreateSecondYearFirstSem",
            'ITNonstem' => "Semester/COS/IT/CreateSecondYearFirstSemNonstem",
            'ESStem' => "Semester/COS/ES/CreateSecondYearFirstSem",
            'ESNonstem' => "Semester/COS/ES/CreateSecondYearFirstSemNonstem",
            'LTStem' => "Semester/COS/LT/CreateSecondYearFirstSem",
            'LTNonstem' => "Semester/COS/LT/CreateSecondYearFirstSemNonstem",
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
    public function store(StoreSecondYearFirstSemesterRequest $request)
    {
        $source = $request->query('source');

        // Define a mapping of source to models
        $modelMapping = [
            'CSStem' => SecondYearFirstSemester::class,
            'CSNonstem' => NonStemSecondYearFirstSemester::class,
            'ISStem' => SecondYearFirstSemesterIS::class,
            'ISNonstem' => NonStemSecondYearFirstSemesterIS::class,
            'ITStem' => SecondYearFirstSemesterIT::class,
            'ITNonstem' => NonStemSecondYearFirstSemesterIT::class,
            'ESStem' => SecondYearFirstSemesterES::class,
            'ESNonstem' => NonStemSecondYearFirstSemesterES::class,
            'LTStem' => SecondYearFirstSemesterLT::class,
            'LTNonstem' => NonStemSecondYearFirstSemesterLT::class,
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
    public function show(SecondYearFirstSemester $secondYearFirstSemester)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SecondYearFirstSemester $secondYearFirstSemester)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSecondYearFirstSemesterRequest $request, SecondYearFirstSemester $secondYearFirstSemester)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SecondYearFirstSemester $secondYearFirstSemester)
    {
        //
    }
}
