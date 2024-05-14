<?php

namespace App\Http\Controllers\COS;

use App\Http\Resources\FirstYearSecondSemResource;
use App\Models\COS\CS\FirstYearSecondSemester;
use App\Models\COS\CS\NonStemFirstYearSecondSemester;
use App\Models\COS\IS\FirstYearSecondSemesterIS;
use App\Models\COS\IS\NonStemFirstYearSecondSemesterIS;
use App\Models\COS\IT\FirstYearSecondSemesterIT;
use App\Models\COS\IT\NonStemFirstYearSecondSemesterIT;
use App\Models\COS\ES\FirstYearSecondSemesterES;
use App\Models\COS\ES\NonStemFirstYearSecondSemesterES;
use App\Models\COS\LT\FirstYearSecondSemesterLT;
use App\Models\COS\LT\NonStemFirstYearSecondSemesterLT;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFirstYearSecondSemesterRequest;
use App\Http\Requests\UpdateFirstYearSecondSemesterRequest;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Validator; // Import Validator facade

class FirstYearSecondSemController extends Controller
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
            'CSStem' => "Semester/COS/CS/CreateFirstYearSecondSem",
            'CSNonstem' => "Semester/COS/CS/CreateFirstYearSecondSemNonstem",
            'ISStem' => "Semester/COS/IS/CreateFirstYearSecondSem",
            'ISNonstem' => "Semester/COS/IS/CreateFirstYearSecondSemNonstem",
            'ITStem' => "Semester/COS/IT/CreateFirstYearSecondSem",
            'ITNonstem' => "Semester/COS/IT/CreateFirstYearSecondSemNonstem",
            'ESStem' => "Semester/COS/ES/CreateFirstYearSecondSem",
            'ESNonstem' => "Semester/COS/ES/CreateFirstYearSecondSemNonstem",
            'LTStem' => "Semester/COS/LT/CreateFirstYearSecondSem",
            'LTNonstem' => "Semester/COS/LT/CreateFirstYearSecondSemNonstem",
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
    public function store(StoreFirstYearSecondSemesterRequest $request)
    {
        $source = $request->query('source');

        // Define a mapping of source to models
        $modelMapping = [
            'CSStem' => FirstYearSecondSemester::class,
            'CSNonstem' => NonStemFirstYearSecondSemester::class,
            'ISStem' => FirstYearSecondSemesterIS::class,
            'ISNonstem' => NonStemFirstYearSecondSemesterIS::class,
            'ITStem' => FirstYearSecondSemesterIT::class,
            'ITNonstem' => NonStemFirstYearSecondSemesterIT::class,
            'ESStem' => FirstYearSecondSemesterES::class,
            'ESNonstem' => NonStemFirstYearSecondSemesterES::class,
            'LTStem' => FirstYearSecondSemesterLT::class,
            'LTNonstem' => NonStemFirstYearSecondSemesterLT::class,
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
    public function show(FirstYearSecondSemester $firstYearSecondSemester)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FirstYearSecondSemester $firstYearSecondSemester)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFirstYearSecondSemesterRequest $request, FirstYearSecondSemester $firstYearSecondSemester)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FirstYearSecondSemester $firstYearSecondSemester)
    {
        //
    }
}
