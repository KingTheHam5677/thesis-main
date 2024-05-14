<?php

namespace App\Http\Controllers\COS;

use App\Http\Resources\ThirdYearFirstSemResource;
use App\Models\COS\CS\ThirdYearFirstSemester;
use App\Models\COS\CS\NonStemThirdYearFirstSemester;
use App\Models\COS\IS\ThirdYearFirstSemesterIS;
use App\Models\COS\IS\NonStemThirdYearFirstSemesterIS;
use App\Models\COS\IT\ThirdYearFirstSemesterIT;
use App\Models\COS\IT\NonStemThirdYearFirstSemesterIT;
use App\Models\COS\ES\ThirdYearFirstSemesterES;
use App\Models\COS\ES\NonStemThirdYearFirstSemesterES;
use App\Models\COS\LT\ThirdYearFirstSemesterLT;
use App\Models\COS\LT\NonStemThirdYearFirstSemesterLT;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreThirdYearFirstSemesterRequest;
use App\Http\Requests\UpdateThirdYearFirstSemesterRequest;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Validator; // Import Validator facade

class ThirdYearFirstSemController extends Controller
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
            'CSStem' => "Semester/COS/CS/CreateThirdYearFirstSem",
            'CSNonstem' => "Semester/COS/CS/CreateThirdYearFirstSemNonstem",
            'ISStem' => "Semester/COS/IS/CreateThirdYearFirstSem",
            'ISNonstem' => "Semester/COS/IS/CreateThirdYearFirstSemNonstem",
            'ITStem' => "Semester/COS/IT/CreateThirdYearFirstSem",
            'ITNonstem' => "Semester/COS/IT/CreateThirdYearFirstSemNonstem",
            'ESStem' => "Semester/COS/ES/CreateThirdYearFirstSem",
            'ESNonstem' => "Semester/COS/ES/CreateThirdYearFirstSemNonstem",
            'LTStem' => "Semester/COS/LT/CreateThirdYearFirstSem",
            'LTNonstem' => "Semester/COS/LT/CreateThirdYearFirstSemNonstem",
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
    public function store(StoreThirdYearFirstSemesterRequest $request)
    {
        $source = $request->query('source');

        // Define a mapping of source to models
        $modelMapping = [
            'CSStem' => ThirdYearFirstSemester::class,
            'CSNonstem' => NonStemThirdYearFirstSemester::class,
            'ISStem' => ThirdYearFirstSemesterIS::class,
            'ISNonstem' => NonStemThirdYearFirstSemesterIS::class,
            'ITStem' => ThirdYearFirstSemesterIT::class,
            'ITNonstem' => NonStemThirdYearFirstSemesterIT::class,
            'ESStem' => ThirdYearFirstSemesterES::class,
            'ESNonstem' => NonStemThirdYearFirstSemesterES::class,
            'LTStem' => ThirdYearFirstSemesterLT::class,
            'LTNonstem' => NonStemThirdYearFirstSemesterLT::class,
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
    public function show(ThirdYearFirstSemester $thirdYearFirstSemester)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ThirdYearFirstSemester $thirdYearFirstSemester)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateThirdYearFirstSemesterRequest $request, ThirdYearFirstSemester $thirdYearFirstSemester)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ThirdYearFirstSemester $thirdYearFirstSemester)
    {
        //
    }
}
