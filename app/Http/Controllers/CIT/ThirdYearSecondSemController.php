<?php

namespace App\Http\Controllers\COS;

use App\Http\Resources\ThirdYearSecondSemResource;
use App\Models\CIT\FT\ThirdYearSecondSemester;
use App\Models\CIT\FT\NonStemThirdYearSecondSemester;
use App\Models\CIT\CET\ThirdYearSecondSemesterCET;
use App\Models\CIT\CET\NonStemThirdYearSecondSemesterCET;
use App\Models\CIT\CT\ThirdYearSecondSemesterCT;
use App\Models\CIT\CT\NonStemThirdYearSecondSemesterCT;
use App\Models\CIT\ET\ThirdYearSecondSemesterET;
use App\Models\CIT\ET\NonStemThirdYearSecondSemesterET;
use App\Models\CIT\ECT\ThirdYearSecondSemesterECT;
use App\Models\CIT\ECT\NonStemThirdYearSecondSemesterECT;
use App\Models\CIT\ICT\ThirdYearSecondSemesterICT;
use App\Models\CIT\ICT\NonStemThirdYearSecondSemesterICT;
use App\Models\CIT\MT\ThirdYearSecondSemesterMT;
use App\Models\CIT\MT\NonStemThirdYearSecondSemesterMT;
use App\Models\CIT\RT\ThirdYearSecondSemesterRT;
use App\Models\CIT\RT\NonStemThirdYearSecondSemesterRT;
use App\Models\CIT\AT\ThirdYearSecondSemesterAT;
use App\Models\CIT\AT\NonStemThirdYearSecondSemesterAT;
use App\Models\CIT\METFT\ThirdYearSecondSemesterMETFT;
use App\Models\CIT\METFT\NonStemThirdYearSecondSemesterMETFT;
use App\Models\CIT\HVRT\ThirdYearSecondSemesterHVRT;
use App\Models\CIT\HVRT\NonStemThirdYearSecondSemesterHVRT;
use App\Models\CIT\PPT\ThirdYearSecondSemesterPPT;
use App\Models\CIT\PPT\NonStemThirdYearSecondSemesterPPT;
use App\Models\CIT\WT\ThirdYearSecondSemesterWT;
use App\Models\CIT\WT\NonStemThirdYearSecondSemesterWT;
use App\Models\CIT\DMT\ThirdYearSecondSemesterDMT;
use App\Models\CIT\DMT\NonStemThirdYearSecondSemesterDMT;
use App\Models\CIT\AF\ThirdYearSecondSemesterAF;
use App\Models\CIT\AF\NonStemThirdYearSecondSemesterAF;
use App\Models\CIT\NFT\ThirdYearSecondSemesterNFT;
use App\Models\CIT\NFT\NonStemThirdYearSecondSemesterNFT;
use App\Models\CIT\PMT\ThirdYearSecondSemesterPMT;
use App\Models\CIT\PMT\NonStemThirdYearSecondSemesterPMT;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreThirdYearSecondSemesterRequest;
use App\Http\Requests\UpdateThirdYearSecondSemesterRequest;
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
            'FTStem' => "Semester/CIT/FT/CreateThirdYearSecondSem",
            'FTNonstem' => "Semester/CIT/FT/CreateThirdYearSecondSemNonstem",
            'CETStem' => "Semester/CIT/CET/CreateThirdYearSecondSem",
            'CETNonstem' => "Semester/CIT/CET/CreateThirdYearSecondSemNonstem",
            'CTStem' => "Semester/CIT/CT/CreateThirdYearSecondSem",
            'CTNonstem' => "Semester/CIT/CT/CreateThirdYearSecondSemNonstem",
            'ETStem' => "Semester/CIT/ET/CreateThirdYearSecondSem",
            'ETNonstem' => "Semester/CIT/ET/CreateThirdYearSecondSemNonstem",
            'ECTStem' => "Semester/CIT/ECT/CreateThirdYearSecondSem",
            'ECTNonstem' => "Semester/CIT/ECT/CreateThirdYearSecondSemNonstem",
            'ICTStem' => "Semester/CIT/ICT/CreateThirdYearSecondSem",
            'ICTNonstem' => "Semester/CIT/ICT/CreateThirdYearSecondSemNonstem",
            'MTStem' => "Semester/CIT/MT/CreateThirdYearSecondSem",
            'MTNonstem' => "Semester/CIT/MT/CreateThirdYearSecondSemNonstem",
            'RTStem' => "Semester/CIT/RT/CreateThirdYearSecondSem",
            'RTNonstem' => "Semester/CIT/RT/CreateThirdYearSecondSemNonstem",
            'ATStem' => "Semester/CIT/AT/CreateThirdYearSecondSem",
            'ATNonstem' => "Semester/CIT/AT/CreateThirdYearSecondSemNonstem",
            'METFTStem' => "Semester/CIT/METFT/CreateThirdYearSecondSem",
            'METFTNonstem' => "Semester/CIT/METFT/CreateThirdYearSecondSemNonstem",
            'HVRTStem' => "Semester/CIT/HVRT/CreateThirdYearSecondSem",
            'HVRTNonstem' => "Semester/CIT/HVRT/CreateThirdYearSecondSemNonstem",
            'PPTStem' => "Semester/CIT/PPT/CreateThirdYearSecondSem",
            'PPTNonstem' => "Semester/CIT/PPT/CreateThirdYearSecondSemNonstem",
            'WTStem' => "Semester/CIT/WT/CreateThirdYearSecondSem",
            'WTNonstem' => "Semester/CIT/WT/CreateThirdYearSecondSemNonstem",
            'NFTStem' => "Semester/CIT/NFT/CreateThirdYearSecondSem",
            'NFTNonstem' => "Semester/CIT/NFT/CreateThirdYearSecondSemNonstem",
            'PMTStem' => "Semester/CIT/PMT/CreateThirdYearSecondSem",
            'PMTNonstem' => "Semester/CIT/PMT/CreateThirdYearSecondSemNonstem",
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
            'FTStem' => ThirdYearSecondSemester::class,
            'FTNonstem' => NonStemThirdYearSecondSemester::class,
            'CETStem' => ThirdYearSecondSemesterCET::class,
            'CETNonstem' => NonStemThirdYearSecondSemesterCET::class,
            'CTStem' => ThirdYearSecondSemesterCT::class,
            'CTNonstem' => NonStemThirdYearSecondSemesterCT::class,
            'ETStem' => ThirdYearSecondSemesterET::class,
            'ETNonstem' => NonStemThirdYearSecondSemesterET::class,
            'ECTStem' => ThirdYearSecondSemesterECT::class,
            'ECTNonstem' => NonStemThirdYearSecondSemesterECT::class,
            'ICTStem' => ThirdYearSecondSemesterICT::class,
            'ICTNonstem' => NonStemThirdYearSecondSemesterICT::class,
            'MTStem' => ThirdYearSecondSemesterMT::class,
            'MTNonstem' => NonStemThirdYearSecondSemesterMT::class,
            'RTStem' => ThirdYearSecondSemesterRT::class,
            'RTNonstem' => NonStemThirdYearSecondSemesterRT::class,
            'ATStem' => ThirdYearSecondSemesterAT::class,
            'ATNonstem' => NonStemThirdYearSecondSemesterAT::class,
            'METFTStem' => ThirdYearSecondSemesterMETFT::class,
            'METFTNonstem' => NonStemThirdYearSecondSemesterMETFT::class,
            'HVRTStem' => ThirdYearSecondSemesterHVRT::class,
            'HVRTNonstem' => NonStemThirdYearSecondSemesterHVRT::class,
            'PPTStem' => ThirdYearSecondSemesterPPT::class,
            'PPTNonstem' => NonStemThirdYearSecondSemesterPPT::class,
            'WTStem' => ThirdYearSecondSemesterWT::class,
            'WTNonstem' => NonStemThirdYearSecondSemesterWT::class,
            'DMTStem' => ThirdYearSecondSemesterDMT::class,
            'DMTNonstem' => NonStemThirdYearSecondSemesterDMT::class,
            'AFStem' => ThirdYearSecondSemesterAF::class,
            'AFNonstem' => NonStemThirdYearSecondSemesterAF::class,
            'NFTStem' => ThirdYearSecondSemesterNFT::class,
            'NFTNonstem' => NonStemThirdYearSecondSemesterNFT::class,
            'PMTStem' => ThirdYearSecondSemesterPMT::class,
            'PMTNonstem' => NonStemThirdYearSecondSemesterPMT::class,
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
