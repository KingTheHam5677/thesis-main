<?php

namespace App\Http\Controllers\COS;

use App\Http\Resources\FourthYearSecondSemResource;
use App\Models\CIT\FT\FourthYearSecondSemester;
use App\Models\CIT\FT\NonStemFourthYearSecondSemester;
use App\Models\CIT\CET\FourthYearSecondSemesterCET;
use App\Models\CIT\CET\NonStemFourthYearSecondSemesterCET;
use App\Models\CIT\CT\FourthYearSecondSemesterCT;
use App\Models\CIT\CT\NonStemFourthYearSecondSemesterCT;
use App\Models\CIT\ET\FourthYearSecondSemesterET;
use App\Models\CIT\ET\NonStemFourthYearSecondSemesterET;
use App\Models\CIT\ECT\FourthYearSecondSemesterECT;
use App\Models\CIT\ECT\NonStemFourthYearSecondSemesterECT;
use App\Models\CIT\ICT\FourthYearSecondSemesterICT;
use App\Models\CIT\ICT\NonStemFourthYearSecondSemesterICT;
use App\Models\CIT\MT\FourthYearSecondSemesterMT;
use App\Models\CIT\MT\NonStemFourthYearSecondSemesterMT;
use App\Models\CIT\RT\FourthYearSecondSemesterRT;
use App\Models\CIT\RT\NonStemFourthYearSecondSemesterRT;
use App\Models\CIT\AT\FourthYearSecondSemesterAT;
use App\Models\CIT\AT\NonStemFourthYearSecondSemesterAT;
use App\Models\CIT\METFT\FourthYearSecondSemesterMETFT;
use App\Models\CIT\METFT\NonStemFourthYearSecondSemesterMETFT;
use App\Models\CIT\HVRT\FourthYearSecondSemesterHVRT;
use App\Models\CIT\HVRT\NonStemFourthYearSecondSemesterHVRT;
use App\Models\CIT\PPT\FourthYearSecondSemesterPPT;
use App\Models\CIT\PPT\NonStemFourthYearSecondSemesterPPT;
use App\Models\CIT\WT\FourthYearSecondSemesterWT;
use App\Models\CIT\WT\NonStemFourthYearSecondSemesterWT;
use App\Models\CIT\DMT\FourthYearSecondSemesterDMT;
use App\Models\CIT\DMT\NonStemFourthYearSecondSemesterDMT;
use App\Models\CIT\AF\FourthYearSecondSemesterAF;
use App\Models\CIT\AF\NonStemFourthYearSecondSemesterAF;
use App\Models\CIT\NFT\FourthYearSecondSemesterNFT;
use App\Models\CIT\NFT\NonStemFourthYearSecondSemesterNFT;
use App\Models\CIT\PMT\FourthYearSecondSemesterPMT;
use App\Models\CIT\PMT\NonStemFourthYearSecondSemesterPMT;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFourthYearSecondSemesterRequest;
use App\Http\Requests\UpdateFourthYearSecondSemesterRequest;
use Inertia\Inertia;
use Illuminate\Support\Facades\Validator; // Import Validator facade
class FourthYearSecondSemController extends Controller
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
            'FTStem' => "Semester/CIT/FT/CreateFourthYearSecondSem",
            'FTNonstem' => "Semester/CIT/FT/CreateFourthYearSecondSemNonstem",
            'CETStem' => "Semester/CIT/CET/CreateFourthYearSecondSem",
            'CETNonstem' => "Semester/CIT/CET/CreateFourthYearSecondSemNonstem",
            'CTStem' => "Semester/CIT/CT/CreateFourthYearSecondSem",
            'CTNonstem' => "Semester/CIT/CT/CreateFourthYearSecondSemNonstem",
            'ETStem' => "Semester/CIT/ET/CreateFourthYearSecondSem",
            'ETNonstem' => "Semester/CIT/ET/CreateFourthYearSecondSemNonstem",
            'ECTStem' => "Semester/CIT/ECT/CreateFourthYearSecondSem",
            'ECTNonstem' => "Semester/CIT/ECT/CreateFourthYearSecondSemNonstem",
            'ICTStem' => "Semester/CIT/ICT/CreateFourthYearSecondSem",
            'ICTNonstem' => "Semester/CIT/ICT/CreateFourthYearSecondSemNonstem",
            'MTStem' => "Semester/CIT/MT/CreateFourthYearSecondSem",
            'MTNonstem' => "Semester/CIT/MT/CreateFourthYearSecondSemNonstem",
            'RTStem' => "Semester/CIT/RT/CreateFourthYearSecondSem",
            'RTNonstem' => "Semester/CIT/RT/CreateFourthYearSecondSemNonstem",
            'ATStem' => "Semester/CIT/AT/CreateFourthYearSecondSem",
            'ATNonstem' => "Semester/CIT/AT/CreateFourthYearSecondSemNonstem",
            'METFTStem' => "Semester/CIT/METFT/CreateFourthYearSecondSem",
            'METFTNonstem' => "Semester/CIT/METFT/CreateFourthYearSecondSemNonstem",
            'HVRTStem' => "Semester/CIT/HVRT/CreateFourthYearSecondSem",
            'HVRTNonstem' => "Semester/CIT/HVRT/CreateFourthYearSecondSemNonstem",
            'PPTStem' => "Semester/CIT/PPT/CreateFourthYearSecondSem",
            'PPTNonstem' => "Semester/CIT/PPT/CreateFourthYearSecondSemNonstem",
            'WTStem' => "Semester/CIT/WT/CreateFourthYearSecondSem",
            'WTNonstem' => "Semester/CIT/WT/CreateFourthYearSecondSemNonstem",
            'NFTStem' => "Semester/CIT/NFT/CreateFourthYearSecondSem",
            'NFTNonstem' => "Semester/CIT/NFT/CreateFourthYearSecondSemNonstem",
            'PMTStem' => "Semester/CIT/PMT/CreateFourthYearSecondSem",
            'PMTNonstem' => "Semester/CIT/PMT/CreateFourthYearSecondSemNonstem",
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
    public function store(StoreFourthYearSecondSemesterRequest $request)
    {
        $source = $request->query('source');

        // Define a mapping of source to models
        $modelMapping = [
            'FTStem' => FourthYearSecondSemester::class,
            'FTNonstem' => NonStemFourthYearSecondSemester::class,
            'CETStem' => FourthYearSecondSemesterCET::class,
            'CETNonstem' => NonStemFourthYearSecondSemesterCET::class,
            'CTStem' => FourthYearSecondSemesterCT::class,
            'CTNonstem' => NonStemFourthYearSecondSemesterCT::class,
            'ETStem' => FourthYearSecondSemesterET::class,
            'ETNonstem' => NonStemFourthYearSecondSemesterET::class,
            'ECTStem' => FourthYearSecondSemesterECT::class,
            'ECTNonstem' => NonStemFourthYearSecondSemesterECT::class,
            'ICTStem' => FourthYearSecondSemesterICT::class,
            'ICTNonstem' => NonStemFourthYearSecondSemesterICT::class,
            'MTStem' => FourthYearSecondSemesterMT::class,
            'MTNonstem' => NonStemFourthYearSecondSemesterMT::class,
            'RTStem' => FourthYearSecondSemesterRT::class,
            'RTNonstem' => NonStemFourthYearSecondSemesterRT::class,
            'ATStem' => FourthYearSecondSemesterAT::class,
            'ATNonstem' => NonStemFourthYearSecondSemesterAT::class,
            'METFTStem' => FourthYearSecondSemesterMETFT::class,
            'METFTNonstem' => NonStemFourthYearSecondSemesterMETFT::class,
            'HVRTStem' => FourthYearSecondSemesterHVRT::class,
            'HVRTNonstem' => NonStemFourthYearSecondSemesterHVRT::class,
            'PPTStem' => FourthYearSecondSemesterPPT::class,
            'PPTNonstem' => NonStemFourthYearSecondSemesterPPT::class,
            'WTStem' => FourthYearSecondSemesterWT::class,
            'WTNonstem' => NonStemFourthYearSecondSemesterWT::class,
            'DMTStem' => FourthYearSecondSemesterDMT::class,
            'DMTNonstem' => NonStemFourthYearSecondSemesterDMT::class,
            'AFStem' => FourthYearSecondSemesterAF::class,
            'AFNonstem' => NonStemFourthYearSecondSemesterAF::class,
            'NFTStem' => FourthYearSecondSemesterNFT::class,
            'NFTNonstem' => NonStemFourthYearSecondSemesterNFT::class,
            'PMTStem' => FourthYearSecondSemesterPMT::class,
            'PMTNonstem' => NonStemFourthYearSecondSemesterPMT::class,
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
    public function show(FourthYearSecondSemester $fourthYearSecondSemester)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FourthYearSecondSemester $fourthYearSecondSemester)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFourthYearSecondSemesterRequest $request, FourthYearSecondSemester $fourthYearSecondSemester)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FourthYearSecondSemester $fourthYearSecondSemester)
    {
        //
    }
}
