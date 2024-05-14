<?php

namespace App\Http\Controllers\COS;

use App\Http\Resources\ThirdYearFirstSemResource;
use App\Models\CIT\FT\ThirdYearFirstSemester;
use App\Models\CIT\FT\NonStemThirdYearFirstSemester;
use App\Models\CIT\CET\ThirdYearFirstSemesterCET;
use App\Models\CIT\CET\NonStemThirdYearFirstSemesterCET;
use App\Models\CIT\CT\ThirdYearFirstSemesterCT;
use App\Models\CIT\CT\NonStemThirdYearFirstSemesterCT;
use App\Models\CIT\ET\ThirdYearFirstSemesterET;
use App\Models\CIT\ET\NonStemThirdYearFirstSemesterET;
use App\Models\CIT\ECT\ThirdYearFirstSemesterECT;
use App\Models\CIT\ECT\NonStemThirdYearFirstSemesterECT;
use App\Models\CIT\ICT\ThirdYearFirstSemesterICT;
use App\Models\CIT\ICT\NonStemThirdYearFirstSemesterICT;
use App\Models\CIT\MT\ThirdYearFirstSemesterMT;
use App\Models\CIT\MT\NonStemThirdYearFirstSemesterMT;
use App\Models\CIT\RT\ThirdYearFirstSemesterRT;
use App\Models\CIT\RT\NonStemThirdYearFirstSemesterRT;
use App\Models\CIT\AT\ThirdYearFirstSemesterAT;
use App\Models\CIT\AT\NonStemThirdYearFirstSemesterAT;
use App\Models\CIT\METFT\ThirdYearFirstSemesterMETFT;
use App\Models\CIT\METFT\NonStemThirdYearFirstSemesterMETFT;
use App\Models\CIT\HVRT\ThirdYearFirstSemesterHVRT;
use App\Models\CIT\HVRT\NonStemThirdYearFirstSemesterHVRT;
use App\Models\CIT\PPT\ThirdYearFirstSemesterPPT;
use App\Models\CIT\PPT\NonStemThirdYearFirstSemesterPPT;
use App\Models\CIT\WT\ThirdYearFirstSemesterWT;
use App\Models\CIT\WT\NonStemThirdYearFirstSemesterWT;
use App\Models\CIT\DMT\ThirdYearFirstSemesterDMT;
use App\Models\CIT\DMT\NonStemThirdYearFirstSemesterDMT;
use App\Models\CIT\AF\ThirdYearFirstSemesterAF;
use App\Models\CIT\AF\NonStemThirdYearFirstSemesterAF;
use App\Models\CIT\NFT\ThirdYearFirstSemesterNFT;
use App\Models\CIT\NFT\NonStemThirdYearFirstSemesterNFT;
use App\Models\CIT\PMT\ThirdYearFirstSemesterPMT;
use App\Models\CIT\PMT\NonStemThirdYearFirstSemesterPMT;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreThirdYearFirstSemesterRequest;
use App\Http\Requests\UpdateThirdYearFirstSemesterRequest;
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
            'FTStem' => "Semester/CIT/FT/CreateThirdYearFirstSem",
            'FTNonstem' => "Semester/CIT/FT/CreateThirdYearFirstSemNonstem",
            'CETStem' => "Semester/CIT/CET/CreateThirdYearFirstSem",
            'CETNonstem' => "Semester/CIT/CET/CreateThirdYearFirstSemNonstem",
            'CTStem' => "Semester/CIT/CT/CreateThirdYearFirstSem",
            'CTNonstem' => "Semester/CIT/CT/CreateThirdYearFirstSemNonstem",
            'ETStem' => "Semester/CIT/ET/CreateThirdYearFirstSem",
            'ETNonstem' => "Semester/CIT/ET/CreateThirdYearFirstSemNonstem",
            'ECTStem' => "Semester/CIT/ECT/CreateThirdYearFirstSem",
            'ECTNonstem' => "Semester/CIT/ECT/CreateThirdYearFirstSemNonstem",
            'ICTStem' => "Semester/CIT/ICT/CreateThirdYearFirstSem",
            'ICTNonstem' => "Semester/CIT/ICT/CreateThirdYearFirstSemNonstem",
            'MTStem' => "Semester/CIT/MT/CreateThirdYearFirstSem",
            'MTNonstem' => "Semester/CIT/MT/CreateThirdYearFirstSemNonstem",
            'RTStem' => "Semester/CIT/RT/CreateThirdYearFirstSem",
            'RTNonstem' => "Semester/CIT/RT/CreateThirdYearFirstSemNonstem",
            'ATStem' => "Semester/CIT/AT/CreateThirdYearFirstSem",
            'ATNonstem' => "Semester/CIT/AT/CreateThirdYearFirstSemNonstem",
            'METFTStem' => "Semester/CIT/METFT/CreateThirdYearFirstSem",
            'METFTNonstem' => "Semester/CIT/METFT/CreateThirdYearFirstSemNonstem",
            'HVRTStem' => "Semester/CIT/HVRT/CreateThirdYearFirstSem",
            'HVRTNonstem' => "Semester/CIT/HVRT/CreateThirdYearFirstSemNonstem",
            'PPTStem' => "Semester/CIT/PPT/CreateThirdYearFirstSem",
            'PPTNonstem' => "Semester/CIT/PPT/CreateThirdYearFirstSemNonstem",
            'WTStem' => "Semester/CIT/WT/CreateThirdYearFirstSem",
            'WTNonstem' => "Semester/CIT/WT/CreateThirdYearFirstSemNonstem",
            'NFTStem' => "Semester/CIT/NFT/CreateThirdYearFirstSem",
            'NFTNonstem' => "Semester/CIT/NFT/CreateThirdYearFirstSemNonstem",
            'PMTStem' => "Semester/CIT/PMT/CreateThirdYearFirstSem",
            'PMTNonstem' => "Semester/CIT/PMT/CreateThirdYearFirstSemNonstem",
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
            'FTStem' => ThirdYearFirstSemester::class,
            'FTNonstem' => NonStemThirdYearFirstSemester::class,
            'CETStem' => ThirdYearFirstSemesterCET::class,
            'CETNonstem' => NonStemThirdYearFirstSemesterCET::class,
            'CTStem' => ThirdYearFirstSemesterCT::class,
            'CTNonstem' => NonStemThirdYearFirstSemesterCT::class,
            'ETStem' => ThirdYearFirstSemesterET::class,
            'ETNonstem' => NonStemThirdYearFirstSemesterET::class,
            'ECTStem' => ThirdYearFirstSemesterECT::class,
            'ECTNonstem' => NonStemThirdYearFirstSemesterECT::class,
            'ICTStem' => ThirdYearFirstSemesterICT::class,
            'ICTNonstem' => NonStemThirdYearFirstSemesterICT::class,
            'MTStem' => ThirdYearFirstSemesterMT::class,
            'MTNonstem' => NonStemThirdYearFirstSemesterMT::class,
            'RTStem' => ThirdYearFirstSemesterRT::class,
            'RTNonstem' => NonStemThirdYearFirstSemesterRT::class,
            'ATStem' => ThirdYearFirstSemesterAT::class,
            'ATNonstem' => NonStemThirdYearFirstSemesterAT::class,
            'METFTStem' => ThirdYearFirstSemesterMETFT::class,
            'METFTNonstem' => NonStemThirdYearFirstSemesterMETFT::class,
            'HVRTStem' => ThirdYearFirstSemesterHVRT::class,
            'HVRTNonstem' => NonStemThirdYearFirstSemesterHVRT::class,
            'PPTStem' => ThirdYearFirstSemesterPPT::class,
            'PPTNonstem' => NonStemThirdYearFirstSemesterPPT::class,
            'WTStem' => ThirdYearFirstSemesterWT::class,
            'WTNonstem' => NonStemThirdYearFirstSemesterWT::class,
            'DMTStem' => ThirdYearFirstSemesterDMT::class,
            'DMTNonstem' => NonStemThirdYearFirstSemesterDMT::class,
            'AFStem' => ThirdYearFirstSemesterAF::class,
            'AFNonstem' => NonStemThirdYearFirstSemesterAF::class,
            'NFTStem' => ThirdYearFirstSemesterNFT::class,
            'NFTNonstem' => NonStemThirdYearFirstSemesterNFT::class,
            'PMTStem' => ThirdYearFirstSemesterPMT::class,
            'PMTNonstem' => NonStemThirdYearFirstSemesterPMT::class,
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
