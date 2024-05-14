<?php

namespace App\Http\Controllers\COS;

use App\Http\Resources\SecondYearFirstSemResource;
use App\Models\CIT\FT\SecondYearFirstSemester;
use App\Models\CIT\FT\NonStemSecondYearFirstSemester;
use App\Models\CIT\CET\SecondYearFirstSemesterCET;
use App\Models\CIT\CET\NonStemSecondYearFirstSemesterCET;
use App\Models\CIT\CT\SecondYearFirstSemesterCT;
use App\Models\CIT\CT\NonStemSecondYearFirstSemesterCT;
use App\Models\CIT\ET\SecondYearFirstSemesterET;
use App\Models\CIT\ET\NonStemSecondYearFirstSemesterET;
use App\Models\CIT\ECT\SecondYearFirstSemesterECT;
use App\Models\CIT\ECT\NonStemSecondYearFirstSemesterECT;
use App\Models\CIT\ICT\SecondYearFirstSemesterICT;
use App\Models\CIT\ICT\NonStemSecondYearFirstSemesterICT;
use App\Models\CIT\MT\SecondYearFirstSemesterMT;
use App\Models\CIT\MT\NonStemSecondYearFirstSemesterMT;
use App\Models\CIT\RT\SecondYearFirstSemesterRT;
use App\Models\CIT\RT\NonStemSecondYearFirstSemesterRT;
use App\Models\CIT\AT\SecondYearFirstSemesterAT;
use App\Models\CIT\AT\NonStemSecondYearFirstSemesterAT;
use App\Models\CIT\METFT\SecondYearFirstSemesterMETFT;
use App\Models\CIT\METFT\NonStemSecondYearFirstSemesterMETFT;
use App\Models\CIT\HVRT\SecondYearFirstSemesterHVRT;
use App\Models\CIT\HVRT\NonStemSecondYearFirstSemesterHVRT;
use App\Models\CIT\PPT\SecondYearFirstSemesterPPT;
use App\Models\CIT\PPT\NonStemSecondYearFirstSemesterPPT;
use App\Models\CIT\WT\SecondYearFirstSemesterWT;
use App\Models\CIT\WT\NonStemSecondYearFirstSemesterWT;
use App\Models\CIT\DMT\SecondYearFirstSemesterDMT;
use App\Models\CIT\DMT\NonStemSecondYearFirstSemesterDMT;
use App\Models\CIT\AF\SecondYearFirstSemesterAF;
use App\Models\CIT\AF\NonStemSecondYearFirstSemesterAF;
use App\Models\CIT\NFT\SecondYearFirstSemesterNFT;
use App\Models\CIT\NFT\NonStemSecondYearFirstSemesterNFT;
use App\Models\CIT\PMT\SecondYearFirstSemesterPMT;
use App\Models\CIT\PMT\NonStemSecondYearFirstSemesterPMT;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSecondYearFirstSemesterRequest;
use App\Http\Requests\UpdateSecondYearFirstSemesterRequest;
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
            'FTStem' => "Semester/CIT/FT/CreateSecondYearFirstSem",
            'FTNonstem' => "Semester/CIT/FT/CreateSecondYearFirstSemNonstem",
            'CETStem' => "Semester/CIT/CET/CreateSecondYearFirstSem",
            'CETNonstem' => "Semester/CIT/CET/CreateSecondYearFirstSemNonstem",
            'CTStem' => "Semester/CIT/CT/CreateSecondYearFirstSem",
            'CTNonstem' => "Semester/CIT/CT/CreateSecondYearFirstSemNonstem",
            'ETStem' => "Semester/CIT/ET/CreateSecondYearFirstSem",
            'ETNonstem' => "Semester/CIT/ET/CreateSecondYearFirstSemNonstem",
            'ECTStem' => "Semester/CIT/ECT/CreateSecondYearFirstSem",
            'ECTNonstem' => "Semester/CIT/ECT/CreateSecondYearFirstSemNonstem",
            'ICTStem' => "Semester/CIT/ICT/CreateSecondYearFirstSem",
            'ICTNonstem' => "Semester/CIT/ICT/CreateSecondYearFirstSemNonstem",
            'MTStem' => "Semester/CIT/MT/CreateSecondYearFirstSem",
            'MTNonstem' => "Semester/CIT/MT/CreateSecondYearFirstSemNonstem",
            'RTStem' => "Semester/CIT/RT/CreateSecondYearFirstSem",
            'RTNonstem' => "Semester/CIT/RT/CreateSecondYearFirstSemNonstem",
            'ATStem' => "Semester/CIT/AT/CreateSecondYearFirstSem",
            'ATNonstem' => "Semester/CIT/AT/CreateSecondYearFirstSemNonstem",
            'METFTStem' => "Semester/CIT/METFT/CreateSecondYearFirstSem",
            'METFTNonstem' => "Semester/CIT/METFT/CreateSecondYearFirstSemNonstem",
            'HVRTStem' => "Semester/CIT/HVRT/CreateSecondYearFirstSem",
            'HVRTNonstem' => "Semester/CIT/HVRT/CreateSecondYearFirstSemNonstem",
            'PPTStem' => "Semester/CIT/PPT/CreateSecondYearFirstSem",
            'PPTNonstem' => "Semester/CIT/PPT/CreateSecondYearFirstSemNonstem",
            'WTStem' => "Semester/CIT/WT/CreateSecondYearFirstSem",
            'WTNonstem' => "Semester/CIT/WT/CreateSecondYearFirstSemNonstem",
            'NFTStem' => "Semester/CIT/NFT/CreateSecondYearFirstSem",
            'NFTNonstem' => "Semester/CIT/NFT/CreateSecondYearFirstSemNonstem",
            'PMTStem' => "Semester/CIT/PMT/CreateSecondYearFirstSem",
            'PMTNonstem' => "Semester/CIT/PMT/CreateSecondYearFirstSemNonstem",
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
            'FTStem' => SecondYearFirstSemester::class,
            'FTNonstem' => NonStemSecondYearFirstSemester::class,
            'CETStem' => SecondYearFirstSemesterCET::class,
            'CETNonstem' => NonStemSecondYearFirstSemesterCET::class,
            'CTStem' => SecondYearFirstSemesterCT::class,
            'CTNonstem' => NonStemSecondYearFirstSemesterCT::class,
            'ETStem' => SecondYearFirstSemesterET::class,
            'ETNonstem' => NonStemSecondYearFirstSemesterET::class,
            'ECTStem' => SecondYearFirstSemesterECT::class,
            'ECTNonstem' => NonStemSecondYearFirstSemesterECT::class,
            'ICTStem' => SecondYearFirstSemesterICT::class,
            'ICTNonstem' => NonStemSecondYearFirstSemesterICT::class,
            'MTStem' => SecondYearFirstSemesterMT::class,
            'MTNonstem' => NonStemSecondYearFirstSemesterMT::class,
            'RTStem' => SecondYearFirstSemesterRT::class,
            'RTNonstem' => NonStemSecondYearFirstSemesterRT::class,
            'ATStem' => SecondYearFirstSemesterAT::class,
            'ATNonstem' => NonStemSecondYearFirstSemesterAT::class,
            'METFTStem' => SecondYearFirstSemesterMETFT::class,
            'METFTNonstem' => NonStemSecondYearFirstSemesterMETFT::class,
            'HVRTStem' => SecondYearFirstSemesterHVRT::class,
            'HVRTNonstem' => NonStemSecondYearFirstSemesterHVRT::class,
            'PPTStem' => SecondYearFirstSemesterPPT::class,
            'PPTNonstem' => NonStemSecondYearFirstSemesterPPT::class,
            'WTStem' => SecondYearFirstSemesterWT::class,
            'WTNonstem' => NonStemSecondYearFirstSemesterWT::class,
            'DMTStem' => SecondYearFirstSemesterDMT::class,
            'DMTNonstem' => NonStemSecondYearFirstSemesterDMT::class,
            'AFStem' => SecondYearFirstSemesterAF::class,
            'AFNonstem' => NonStemSecondYearFirstSemesterAF::class,
            'NFTStem' => SecondYearFirstSemesterNFT::class,
            'NFTNonstem' => NonStemSecondYearFirstSemesterNFT::class,
            'PMTStem' => SecondYearFirstSemesterPMT::class,
            'PMTNonstem' => NonStemSecondYearFirstSemesterPMT::class,
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
