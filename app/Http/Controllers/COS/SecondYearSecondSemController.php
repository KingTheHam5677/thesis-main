<?php

namespace App\Http\Controllers\COS;

use App\Http\Resources\SecondYearSecondSemResource;
use App\Models\COS\CS\SecondYearSecondSemester;
use App\Models\COS\CS\NonStemSecondYearSecondSemester;
use App\Models\COS\IS\SecondYearSecondSemesterIS;
use App\Models\COS\IS\NonStemSecondYearSecondSemesterIS;
use App\Models\COS\IT\SecondYearSecondSemesterIT;
use App\Models\COS\IT\NonStemSecondYearSecondSemesterIT;
use App\Models\COS\ES\SecondYearSecondSemesterES;
use App\Models\COS\ES\NonStemSecondYearSecondSemesterES;
use App\Models\COS\LT\SecondYearSecondSemesterLT;
use App\Models\COS\LT\NonStemSecondYearSecondSemesterLT;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSecondYearSecondSemesterRequest;
use App\Http\Requests\UpdateSecondYearSecondSemesterRequest;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Validator; // Import Validator facade

class SecondYearSecondSemController extends Controller
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
            'CSStem' => "Semester/COS/CS/CreateSecondYearSecondSem",
            'CSNonstem' => "Semester/COS/CS/CreateSecondYearSecondSemNonstem",
            'ISStem' => "Semester/COS/IS/CreateSecondYearSecondSem",
            'ISNonstem' => "Semester/COS/IS/CreateSecondYearSecondSemNonstem",
            'ITStem' => "Semester/COS/IT/CreateSecondYearSecondSem",
            'ITNonstem' => "Semester/COS/IT/CreateSecondYearSecondSemNonstem",
            'ESStem' => "Semester/COS/ES/CreateSecondYearSecondSem",
            'ESNonstem' => "Semester/COS/ES/CreateSecondYearSecondSemNonstem",
            'LTStem' => "Semester/COS/LT/CreateSecondYearSecondSem",
            'LTNonstem' => "Semester/COS/LT/CreateSecondYearSecondSemNonstem",
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
    public function store(StoreSecondYearSecondSemesterRequest $request)
    {
        $source = $request->query('source');

        // Define a mapping of source to models
        $modelMapping = [
            'CSStem' => SecondYearSecondSemester::class,
            'CSNonstem' => NonStemSecondYearSecondSemester::class,
            'ISStem' => SecondYearSecondSemesterIS::class,
            'ISNonstem' => NonStemSecondYearSecondSemesterIS::class,
            'ITStem' => SecondYearSecondSemesterIT::class,
            'ITNonstem' => NonStemSecondYearSecondSemesterIT::class,
            'ESStem' => SecondYearSecondSemesterES::class,
            'ESNonstem' => NonStemSecondYearSecondSemesterES::class,
            'LTStem' => SecondYearSecondSemesterLT::class,
            'LTNonstem' => NonStemSecondYearSecondSemesterLT::class,
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
    public function show(SecondYearSecondSemester $secondYearSecondSemester)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SecondYearSecondSemester $secondYearSecondSemester)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSecondYearSecondSemesterRequest $request, SecondYearSecondSemester $secondYearSecondSemester)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SecondYearSecondSemester $secondYearSecondSemester)
    {
        //
    }
}
