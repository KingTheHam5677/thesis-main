<?php

namespace App\Http\Controllers\COS;

use App\Http\Resources\ThirdYearSecondSemResource;
use App\Models\COS\CS\ThirdYearSecondSemester;
use App\Models\COS\CS\NonStemThirdYearSecondSemester;
use App\Models\COS\IS\ThirdYearSecondSemesterIS;
use App\Models\COS\IS\NonStemThirdYearSecondSemesterIS;
use App\Models\COS\IT\ThirdYearSecondSemesterIT;
use App\Models\COS\IT\NonStemThirdYearSecondSemesterIT;
use App\Models\COS\ES\ThirdYearSecondSemesterES;
use App\Models\COS\ES\NonStemThirdYearSecondSemesterES;
use App\Models\COS\LT\ThirdYearSecondSemesterLT;
use App\Models\COS\LT\NonStemThirdYearSecondSemesterLT;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreThirdYearSecondSemesterRequest;
use App\Http\Requests\UpdateThirdYearSecondSemesterRequest;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Validator; // Import Validator facade

class ThirdYearSecondSemController extends Controller
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
            'CSStem' => "Semester/COS/CS/CreateThirdYearSecondSem",
            'CSNonstem' => "Semester/COS/CS/CreateThirdYearSecondSemNonstem",
            'ISStem' => "Semester/COS/IS/CreateThirdYearSecondSem",
            'ISNonstem' => "Semester/COS/IS/CreateThirdYearSecondSemNonstem",
            'ITStem' => "Semester/COS/IT/CreateThirdYearSecondSem",
            'ITNonstem' => "Semester/COS/IT/CreateThirdYearSecondSemNonstem",
            'ESStem' => "Semester/COS/ES/CreateThirdYearSecondSem",
            'ESNonstem' => "Semester/COS/ES/CreateThirdYearSecondSemNonstem",
            'LTStem' => "Semester/COS/LT/CreateThirdYearSecondSem",
            'LTNonstem' => "Semester/COS/LT/CreateThirdYearSecondSemNonstem",
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
    public function store(StoreThirdYearSecondSemesterRequest $request)
    {
        $source = $request->query('source');

        // Define a mapping of source to models
        $modelMapping = [
            'CSStem' => ThirdYearSecondSemester::class,
            'CSNonstem' => NonStemThirdYearSecondSemester::class,
            'ISStem' => ThirdYearSecondSemesterIS::class,
            'ISNonstem' => NonStemThirdYearSecondSemesterIS::class,
            'ITStem' => ThirdYearSecondSemesterIT::class,
            'ITNonstem' => NonStemThirdYearSecondSemesterIT::class,
            'ESStem' => ThirdYearSecondSemesterES::class,
            'ESNonstem' => NonStemThirdYearSecondSemesterES::class,
            'LTStem' => ThirdYearSecondSemesterLT::class,
            'LTNonstem' => NonStemThirdYearSecondSemesterLT::class,
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
    public function show(ThirdYearSecondSemester $thirdYearSecondSemester)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ThirdYearSecondSemester $thirdYearSecondSemester)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateThirdYearSecondSemesterRequest $request, ThirdYearSecondSemester $thirdYearSecondSemester)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ThirdYearSecondSemester $thirdYearSecondSemester)
    {
        //
    }
}
