<?php

namespace App\Http\Controllers\COS;

use App\Http\Resources\SecondYearSecondSemResource;
use App\Models\CIT\FT\SecondYearSecondSemester;
use App\Models\CIT\FT\NonStemSecondYearSecondSemester;
use App\Models\CIT\CET\SecondYearSecondSemesterCET;
use App\Models\CIT\CET\NonStemSecondYearSecondSemesterCET;
use App\Models\CIT\CT\SecondYearSecondSemesterCT;
use App\Models\CIT\CT\NonStemSecondYearSecondSemesterCT;
use App\Models\CIT\ET\SecondYearSecondSemesterET;
use App\Models\CIT\ET\NonStemSecondYearSecondSemesterET;
use App\Models\CIT\ECT\SecondYearSecondSemesterECT;
use App\Models\CIT\ECT\NonStemSecondYearSecondSemesterECT;
use App\Models\CIT\ICT\SecondYearSecondSemesterICT;
use App\Models\CIT\ICT\NonStemSecondYearSecondSemesterICT;
use App\Models\CIT\MT\SecondYearSecondSemesterMT;
use App\Models\CIT\MT\NonStemSecondYearSecondSemesterMT;
use App\Models\CIT\RT\SecondYearSecondSemesterRT;
use App\Models\CIT\RT\NonStemSecondYearSecondSemesterRT;
use App\Models\CIT\AT\SecondYearSecondSemesterAT;
use App\Models\CIT\AT\NonStemSecondYearSecondSemesterAT;
use App\Models\CIT\METFT\SecondYearSecondSemesterMETFT;
use App\Models\CIT\METFT\NonStemSecondYearSecondSemesterMETFT;
use App\Models\CIT\HV_RT\SecondYearSecondSemesterHV_RT;
use App\Models\CIT\HV_RT\NonStemSecondYearSecondSemesterHV_RT;
use App\Models\CIT\PPT\SecondYearSecondSemesterPPT;
use App\Models\CIT\PPT\NonStemSecondYearSecondSemesterPPT;
use App\Models\CIT\WT\SecondYearSecondSemesterWT;
use App\Models\CIT\WT\NonStemSecondYearSecondSemesterWT;
use App\Models\CIT\DMT\SecondYearSecondSemesterDMT;
use App\Models\CIT\DMT\NonStemSecondYearSecondSemesterDMT;
use App\Models\CIT\AF\SecondYearSecondSemesterAF;
use App\Models\CIT\AF\NonStemSecondYearSecondSemesterAF;
use App\Models\CIT\NFT\SecondYearSecondSemesterNFT;
use App\Models\CIT\NFT\NonStemSecondYearSecondSemesterNFT;
use App\Models\CIT\PMT\SecondYearSecondSemesterPMT;
use App\Models\CIT\PMT\NonStemSecondYearSecondSemesterPMT;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSecondYearSecondSemesterRequest;
use App\Http\Requests\UpdateSecondYearSecondSemesterRequest;
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
            'FTStem' => "Semester/CIT/FT/CreateSecondYearSecondSem",
            'FTNonstem' => "Semester/CIT/FT/CreateSecondYearSecondSemNonstem",
            'CETStem' => "Semester/CIT/CET/CreateSecondYearSecondSem",
            'CETNonstem' => "Semester/CIT/CET/CreateSecondYearSecondSemNonstem",
            'CTStem' => "Semester/CIT/CT/CreateSecondYearSecondSem",
            'CTNonstem' => "Semester/CIT/CT/CreateSecondYearSecondSemNonstem",
            'ETStem' => "Semester/CIT/ET/CreateSecondYearSecondSem",
            'ETNonstem' => "Semester/CIT/ET/CreateSecondYearSecondSemNonstem",
            'ECTStem' => "Semester/CIT/ECT/CreateSecondYearSecondSem",
            'ECTNonstem' => "Semester/CIT/ECT/CreateSecondYearSecondSemNonstem",
            'ICTStem' => "Semester/CIT/ICT/CreateSecondYearSecondSem",
            'ICTNonstem' => "Semester/CIT/ICT/CreateSecondYearSecondSemNonstem",
            'MTStem' => "Semester/CIT/MT/CreateSecondYearSecondSem",
            'MTNonstem' => "Semester/CIT/MT/CreateSecondYearSecondSemNonstem",
            'RTStem' => "Semester/CIT/RT/CreateSecondYearSecondSem",
            'RTNonstem' => "Semester/CIT/RT/CreateSecondYearSecondSemNonstem",
            'ATStem' => "Semester/CIT/AT/CreateSecondYearSecondSem",
            'ATNonstem' => "Semester/CIT/AT/CreateSecondYearSecondSemNonstem",
            'METFTStem' => "Semester/CIT/METFT/CreateSecondYearSecondSem",
            'METFTNonstem' => "Semester/CIT/METFT/CreateSecondYearSecondSemNonstem",
            'HV_RTStem' => "Semester/CIT/HV_RT/CreateSecondYearSecondSem",
            'HV_RTNonstem' => "Semester/CIT/HV_RT/CreateSecondYearSecondSemNonstem",
            'PPTStem' => "Semester/CIT/PPT/CreateSecondYearSecondSem",
            'PPTNonstem' => "Semester/CIT/PPT/CreateSecondYearSecondSemNonstem",
            'WTStem' => "Semester/CIT/WT/CreateSecondYearSecondSem",
            'WTNonstem' => "Semester/CIT/WT/CreateSecondYearSecondSemNonstem",
            'NFTStem' => "Semester/CIT/NFT/CreateSecondYearSecondSem",
            'NFTNonstem' => "Semester/CIT/NFT/CreateSecondYearSecondSemNonstem",
            'PMTStem' => "Semester/CIT/PMT/CreateSecondYearSecondSem",
            'PMTNonstem' => "Semester/CIT/PMT/CreateSecondYearSecondSemNonstem",
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
            'FTStem' => SecondYearSecondSemester::class,
            'FTNonstem' => NonStemSecondYearSecondSemester::class,
            'CETStem' => SecondYearSecondSemesterCET::class,
            'CETNonstem' => NonStemSecondYearSecondSemesterCET::class,
            'CTStem' => SecondYearSecondSemesterCT::class,
            'CTNonstem' => NonStemSecondYearSecondSemesterCT::class,
            'ETStem' => SecondYearSecondSemesterET::class,
            'ETNonstem' => NonStemSecondYearSecondSemesterET::class,
            'ECTStem' => SecondYearSecondSemesterECT::class,
            'ECTNonstem' => NonStemSecondYearSecondSemesterECT::class,
            'ICTStem' => SecondYearSecondSemesterICT::class,
            'ICTNonstem' => NonStemSecondYearSecondSemesterICT::class,
            'MTStem' => SecondYearSecondSemesterMT::class,
            'MTNonstem' => NonStemSecondYearSecondSemesterMT::class,
            'RTStem' => SecondYearSecondSemesterRT::class,
            'RTNonstem' => NonStemSecondYearSecondSemesterRT::class,
            'ATStem' => SecondYearSecondSemesterAT::class,
            'ATNonstem' => NonStemSecondYearSecondSemesterAT::class,
            'METFTStem' => SecondYearSecondSemesterMETFT::class,
            'METFTNonstem' => NonStemSecondYearSecondSemesterMETFT::class,
            'HV_RTStem' => SecondYearSecondSemesterHV_RT::class,
            'HV_RTNonstem' => NonStemSecondYearSecondSemesterHV_RT::class,
            'PPTStem' => SecondYearSecondSemesterPPT::class,
            'PPTNonstem' => NonStemSecondYearSecondSemesterPPT::class,
            'WTStem' => SecondYearSecondSemesterWT::class,
            'WTNonstem' => NonStemSecondYearSecondSemesterWT::class,
            'DMTStem' => SecondYearSecondSemesterDMT::class,
            'DMTNonstem' => NonStemSecondYearSecondSemesterDMT::class,
            'AFStem' => SecondYearSecondSemesterAF::class,
            'AFNonstem' => NonStemSecondYearSecondSemesterAF::class,
            'NFTStem' => SecondYearSecondSemesterNFT::class,
            'NFTNonstem' => NonStemSecondYearSecondSemesterNFT::class,
            'PMTStem' => SecondYearSecondSemesterPMT::class,
            'PMTNonstem' => NonStemSecondYearSecondSemesterPMT::class,
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
