<?php

namespace App\Http\Controllers\COS;

use App\Http\Resources\FirstYearFirstSemResource;
use App\Models\COS\CS\FirstYearFirstSemester;
use App\Models\COS\CS\NonStemFirstYearFirstSemester;
use App\Models\COS\IS\FirstYearFirstSemesterIS;
use App\Models\COS\IS\NonStemFirstYearFirstSemesterIS;
use App\Models\COS\IT\FirstYearFirstSemesterIT;
use App\Models\COS\IT\NonStemFirstYearFirstSemesterIT;
use App\Models\COS\ES\FirstYearFirstSemesterES;
use App\Models\COS\ES\NonStemFirstYearFirstSemesterES;
use App\Models\COS\LT\FirstYearFirstSemesterLT;
use App\Models\COS\LT\NonStemFirstYearFirstSemesterLT;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator; // Import Validator facade
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFirstYearFirstSemesterRequest;
use App\Http\Requests\UpdateFirstYearFirstSemesterRequest;
use Inertia\Inertia;

class FirstYearFirstSemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    }

    public function create(Request $request)
    {
        $source = $request->query('source');

        // Define a mapping of source to views
        $viewMapping = [
            'CSStem' => "Semester/COS/CS/CreateFirstYearFirstSem",
            'CSNonstem' => "Semester/COS/CS/CreateFirstYearFirstSemNonstem",
            'ISStem' => "Semester/COS/IS/CreateFirstYearFirstSem",
            'ISNonstem' => "Semester/COS/IS/CreateFirstYearFirstSemNonstem",
            'ITStem' => "Semester/COS/IT/CreateFirstYearFirstSem",
            'ITNonstem' => "Semester/COS/IT/CreateFirstYearFirstSemNonstem",
            'ESStem' => "Semester/COS/ES/CreateFirstYearFirstSem",
            'ESNonstem' => "Semester/COS/ES/CreateFirstYearFirstSemNonstem",
            'LTStem' => "Semester/COS/LT/CreateFirstYearFirstSem",
            'LTNonstem' => "Semester/COS/LT/CreateFirstYearFirstSemNonstem",
        ];

        // Check if the source is valid
        if (!array_key_exists($source, $viewMapping)) {
            abort(404, 'Invalid source');
        }

        // Render the appropriate view based on the source
        return Inertia::render($viewMapping[$source]);
    }

    public function store(Request $request)
    {
        $source = $request->query('source');

        // Define a mapping of source to models
        $modelMapping = [
            'CSStem' => FirstYearFirstSemester::class,
            'CSNonstem' => NonStemFirstYearFirstSemester::class,
            'ISStem' => FirstYearFirstSemesterIS::class,
            'ISNonstem' => NonStemFirstYearFirstSemesterIS::class,
            'ITStem' => FirstYearFirstSemesterIT::class,
            'ITNonstem' => NonStemFirstYearFirstSemesterIT::class,
            'ESStem' => FirstYearFirstSemesterES::class,
            'ESNonstem' => NonStemFirstYearFirstSemesterES::class,
            'LTStem' => FirstYearFirstSemesterLT::class,
            'LTNonstem' => NonStemFirstYearFirstSemesterLT::class,
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
    public function show(FirstYearFirstSemester $firstYearFirstSemester)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FirstYearFirstSemester $firstYearFirstSemester)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFirstYearFirstSemesterRequest $request, FirstYearFirstSemester $firstYearFirstSemester)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FirstYearFirstSemester $firstYearFirstSemester)
    {
        //
    }
}
