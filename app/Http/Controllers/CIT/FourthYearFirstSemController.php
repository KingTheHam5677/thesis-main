<?php

namespace App\Http\Controllers\COS;

use App\Http\Resources\FourthYearFirstSemResource;
use App\Models\CIT\FT\FourthYearFirstSemester;
use App\Models\CIT\FT\NonStemFourthYearFirstSemester;
use App\Models\CIT\CET\FourthYearFirstSemesterCET;
use App\Models\CIT\CET\NonStemFourthYearFirstSemesterCET;
use App\Models\CIT\CT\FourthYearFirstSemesterCT;
use App\Models\CIT\CT\NonStemFourthYearFirstSemesterCT;
use App\Models\CIT\ET\FourthYearFirstSemesterET;
use App\Models\CIT\ET\NonStemFourthYearFirstSemesterET;
use App\Models\CIT\ECT\FourthYearFirstSemesterECT;
use App\Models\CIT\ECT\NonStemFourthYearFirstSemesterECT;
use App\Models\CIT\ICT\FourthYearFirstSemesterICT;
use App\Models\CIT\ICT\NonStemFourthYearFirstSemesterICT;
use App\Models\CIT\MT\FourthYearFirstSemesterMT;
use App\Models\CIT\MT\NonStemFourthYearFirstSemesterMT;
use App\Models\CIT\RT\FourthYearFirstSemesterRT;
use App\Models\CIT\RT\NonStemFourthYearFirstSemesterRT;
use App\Models\CIT\AT\FourthYearFirstSemesterAT;
use App\Models\CIT\AT\NonStemFourthYearFirstSemesterAT;
use App\Models\CIT\METFT\FourthYearFirstSemesterMETFT;
use App\Models\CIT\METFT\NonStemFourthYearFirstSemesterMETFT;
use App\Models\CIT\HVRT\FourthYearFirstSemesterHVRT;
use App\Models\CIT\HVRT\NonStemFourthYearFirstSemesterHVRT;
use App\Models\CIT\PPT\FourthYearFirstSemesterPPT;
use App\Models\CIT\PPT\NonStemFourthYearFirstSemesterPPT;
use App\Models\CIT\WT\FourthYearFirstSemesterWT;
use App\Models\CIT\WT\NonStemFourthYearFirstSemesterWT;
use App\Models\CIT\DMT\FourthYearFirstSemesterDMT;
use App\Models\CIT\DMT\NonStemFourthYearFirstSemesterDMT;
use App\Models\CIT\AF\FourthYearFirstSemesterAF;
use App\Models\CIT\AF\NonStemFourthYearFirstSemesterAF;
use App\Models\CIT\NFT\FourthYearFirstSemesterNFT;
use App\Models\CIT\NFT\NonStemFourthYearFirstSemesterNFT;
use App\Models\CIT\PMT\FourthYearFirstSemesterPMT;
use App\Models\CIT\PMT\NonStemFourthYearFirstSemesterPMT;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFourthYearFirstSemesterRequest;
use App\Http\Requests\UpdateFourthYearFirstSemesterRequest;
use Inertia\Inertia;
use Illuminate\Support\Facades\Validator; // Import Validator facade


class FourthYearFirstSemController extends Controller
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
            'FTStem' => "Semester/CIT/FT/CreateFourthYearFirstSem",
            'FTNonstem' => "Semester/CIT/FT/CreateFourthYearFirstSemNonstem",
            'CETStem' => "Semester/CIT/CET/CreateFourthYearFirstSem",
            'CETNonstem' => "Semester/CIT/CET/CreateFourthYearFirstSemNonstem",
            'CTStem' => "Semester/CIT/CT/CreateFourthYearFirstSem",
            'CTNonstem' => "Semester/CIT/CT/CreateFourthYearFirstSemNonstem",
            'ETStem' => "Semester/CIT/ET/CreateFourthYearFirstSem",
            'ETNonstem' => "Semester/CIT/ET/CreateFourthYearFirstSemNonstem",
            'ECTStem' => "Semester/CIT/ECT/CreateFourthYearFirstSem",
            'ECTNonstem' => "Semester/CIT/ECT/CreateFourthYearFirstSemNonstem",
            'ICTStem' => "Semester/CIT/ICT/CreateFourthYearFirstSem",
            'ICTNonstem' => "Semester/CIT/ICT/CreateFourthYearFirstSemNonstem",
            'MTStem' => "Semester/CIT/MT/CreateFourthYearFirstSem",
            'MTNonstem' => "Semester/CIT/MT/CreateFourthYearFirstSemNonstem",
            'RTStem' => "Semester/CIT/RT/CreateFourthYearFirstSem",
            'RTNonstem' => "Semester/CIT/RT/CreateFourthYearFirstSemNonstem",
            'ATStem' => "Semester/CIT/AT/CreateFourthYearFirstSem",
            'ATNonstem' => "Semester/CIT/AT/CreateFourthYearFirstSemNonstem",
            'METFTStem' => "Semester/CIT/METFT/CreateFourthYearFirstSem",
            'METFTNonstem' => "Semester/CIT/METFT/CreateFourthYearFirstSemNonstem",
            'HVRTStem' => "Semester/CIT/HVRT/CreateFourthYearFirstSem",
            'HVRTNonstem' => "Semester/CIT/HVRT/CreateFourthYearFirstSemNonstem",
            'PPTStem' => "Semester/CIT/PPT/CreateFourthYearFirstSem",
            'PPTNonstem' => "Semester/CIT/PPT/CreateFourthYearFirstSemNonstem",
            'WTStem' => "Semester/CIT/WT/CreateFourthYearFirstSem",
            'WTNonstem' => "Semester/CIT/WT/CreateFourthYearFirstSemNonstem",
            'NFTStem' => "Semester/CIT/NFT/CreateFourthYearFirstSem",
            'NFTNonstem' => "Semester/CIT/NFT/CreateFourthYearFirstSemNonstem",
            'PMTStem' => "Semester/CIT/PMT/CreateFourthYearFirstSem",
            'PMTNonstem' => "Semester/CIT/PMT/CreateFourthYearFirstSemNonstem",
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
    public function store(StoreFourthYearFirstSemesterRequest $request)
    {
        $source = $request->query('source');

        // Define a mapping of source to models
        $modelMapping = [
            'FTStem' => FourthYearFirstSemester::class,
            'FTNonstem' => NonStemFourthYearFirstSemester::class,
            'CETStem' => FourthYearFirstSemesterCET::class,
            'CETNonstem' => NonStemFourthYearFirstSemesterCET::class,
            'CTStem' => FourthYearFirstSemesterCT::class,
            'CTNonstem' => NonStemFourthYearFirstSemesterCT::class,
            'ETStem' => FourthYearFirstSemesterET::class,
            'ETNonstem' => NonStemFourthYearFirstSemesterET::class,
            'ECTStem' => FourthYearFirstSemesterECT::class,
            'ECTNonstem' => NonStemFourthYearFirstSemesterECT::class,
            'ICTStem' => FourthYearFirstSemesterICT::class,
            'ICTNonstem' => NonStemFourthYearFirstSemesterICT::class,
            'MTStem' => FourthYearFirstSemesterMT::class,
            'MTNonstem' => NonStemFourthYearFirstSemesterMT::class,
            'RTStem' => FourthYearFirstSemesterRT::class,
            'RTNonstem' => NonStemFourthYearFirstSemesterRT::class,
            'ATStem' => FourthYearFirstSemesterAT::class,
            'ATNonstem' => NonStemFourthYearFirstSemesterAT::class,
            'METFTStem' => FourthYearFirstSemesterMETFT::class,
            'METFTNonstem' => NonStemFourthYearFirstSemesterMETFT::class,
            'HVRTStem' => FourthYearFirstSemesterHVRT::class,
            'HVRTNonstem' => NonStemFourthYearFirstSemesterHVRT::class,
            'PPTStem' => FourthYearFirstSemesterPPT::class,
            'PPTNonstem' => NonStemFourthYearFirstSemesterPPT::class,
            'WTStem' => FourthYearFirstSemesterWT::class,
            'WTNonstem' => NonStemFourthYearFirstSemesterWT::class,
            'DMTStem' => FourthYearFirstSemesterDMT::class,
            'DMTNonstem' => NonStemFourthYearFirstSemesterDMT::class,
            'AFStem' => FourthYearFirstSemesterAF::class,
            'AFNonstem' => NonStemFourthYearFirstSemesterAF::class,
            'NFTStem' => FourthYearFirstSemesterNFT::class,
            'NFTNonstem' => NonStemFourthYearFirstSemesterNFT::class,
            'PMTStem' => FourthYearFirstSemesterPMT::class,
            'PMTNonstem' => NonStemFourthYearFirstSemesterPMT::class,
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
    public function show(FourthYearFirstSemester $fourthYearFirstSemester)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FourthYearFirstSemester $fourthYearFirstSemester)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFourthYearFirstSemesterRequest $request, FourthYearFirstSemester $fourthYearFirstSemester)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FourthYearFirstSemester $fourthYearFirstSemester)
    {
        //
    }
}
