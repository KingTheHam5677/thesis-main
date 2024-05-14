<?php

namespace App\Http\Controllers\COS;
use App\Http\Resources\FirstYearFirstSemResource;
use App\Models\COS\FT\FirstYearFirstSemester;
use App\Models\COS\FT\NonStemFirstYearFirstSemester;
use App\Models\COS\CET\FirstYearFirstSemesterCET;
use App\Models\COS\CET\NonStemFirstYearFirstSemesterCET;
use App\Models\COS\CT\FirstYearFirstSemesterCT;
use App\Models\COS\CT\NonStemFirstYearFirstSemesterCT;
use App\Models\COS\ET\FirstYearFirstSemesterET;
use App\Models\COS\ET\NonStemFirstYearFirstSemesterET;
use App\Models\COS\ECT\FirstYearFirstSemesterECT;
use App\Models\COS\ECT\NonStemFirstYearFirstSemesterECT;
use App\Models\COS\ICT\FirstYearFirstSemesterICT;
use App\Models\COS\ICT\NonStemFirstYearFirstSemesterICT;
use App\Models\COS\MT\FirstYearFirstSemesterMT;
use App\Models\COS\MT\NonStemFirstYearFirstSemesterMT;
use App\Models\COS\RT\FirstYearFirstSemesterRT;
use App\Models\COS\RT\NonStemFirstYearFirstSemesterRT;
use App\Models\COS\AT\FirstYearFirstSemesterAT;
use App\Models\COS\AT\NonStemFirstYearFirstSemesterAT;
use App\Models\COS\METFT\FirstYearFirstSemesterMETFT;
use App\Models\COS\METFT\NonStemFirstYearFirstSemesterMETFT;
use App\Models\COS\HVRT\FirstYearFirstSemesterHVRT;
use App\Models\COS\HVRT\NonStemFirstYearFirstSemesterHVRT;
use App\Models\COS\PPT\FirstYearFirstSemesterPPT;
use App\Models\COS\PPT\NonStemFirstYearFirstSemesterPPT;
use App\Models\COS\WT\FirstYearFirstSemesterWT;
use App\Models\COS\WT\NonStemFirstYearFirstSemesterWT;
use App\Models\COS\DMT\FirstYearFirstSemesterDMT;
use App\Models\COS\DMT\NonStemFirstYearFirstSemesterDMT;
use App\Models\COS\AF\FirstYearFirstSemesterAF;
use App\Models\COS\AF\NonStemFirstYearFirstSemesterAF;
use App\Models\COS\NFT\FirstYearFirstSemesterNFT;
use App\Models\COS\NFT\NonStemFirstYearFirstSemesterNFT;
use App\Models\COS\PMT\FirstYearFirstSemesterPMT;
use App\Models\COS\PMT\NonStemFirstYearFirstSemesterPMT;
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
            'FTStem' => "Semester/CIT/FT/CreateFirstYearFirstSem",
            'FTNonstem' => "Semester/CIT/FT/CreateFirstYearFirstSemNonstem",
            'CETStem' => "Semester/CIT/CET/CreateFirstYearFirstSem",
            'CETNonstem' => "Semester/CIT/CET/CreateFirstYearFirstSemNonstem",
            'CTStem' => "Semester/CIT/CT/CreateFirstYearFirstSem",
            'CTNonstem' => "Semester/CIT/CT/CreateFirstYearFirstSemNonstem",
            'ETStem' => "Semester/CIT/ET/CreateFirstYearFirstSem",
            'ETNonstem' => "Semester/CIT/ET/CreateFirstYearFirstSemNonstem",
            'ECTStem' => "Semester/CIT/ECT/CreateFirstYearFirstSem",
            'ECTNonstem' => "Semester/CIT/ECT/CreateFirstYearFirstSemNonstem",
            'ICTStem' => "Semester/CIT/ICT/CreateFirstYearFirstSem",
            'ICTNonstem' => "Semester/CIT/ICT/CreateFirstYearFirstSemNonstem",
            'MTStem' => "Semester/CIT/MT/CreateFirstYearFirstSem",
            'MTNonstem' => "Semester/CIT/MT/CreateFirstYearFirstSemNonstem",
            'RTStem' => "Semester/CIT/RT/CreateFirstYearFirstSem",
            'RTNonstem' => "Semester/CIT/RT/CreateFirstYearFirstSemNonstem",
            'ATStem' => "Semester/CIT/AT/CreateFirstYearFirstSem",
            'ATNonstem' => "Semester/CIT/AT/CreateFirstYearFirstSemNonstem",
            'METFTStem' => "Semester/CIT/METFT/CreateFirstYearFirstSem",
            'METFTNonstem' => "Semester/CIT/METFT/CreateFirstYearFirstSemNonstem",
            'HVRTStem' => "Semester/CIT/HVRT/CreateFirstYearFirstSem",
            'HVRTNonstem' => "Semester/CIT/HVRT/CreateFirstYearFirstSemNonstem",
            'PPTStem' => "Semester/CIT/PPT/CreateFirstYearFirstSem",
            'PPTNonstem' => "Semester/CIT/PPT/CreateFirstYearFirstSemNonstem",
            'WTStem' => "Semester/CIT/WT/CreateFirstYearFirstSem",
            'WTNonstem' => "Semester/CIT/WT/CreateFirstYearFirstSemNonstem",
            'NFTStem' => "Semester/CIT/NFT/CreateFirstYearFirstSem",
            'NFTNonstem' => "Semester/CIT/NFT/CreateFirstYearFirstSemNonstem",
            'PMTStem' => "Semester/CIT/PMT/CreateFirstYearFirstSem",
            'PMTNonstem' => "Semester/CIT/PMT/CreateFirstYearFirstSemNonstem",
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
            'FTStem' => FirstYearFirstSemester::class,
            'FTNonstem' => NonStemFirstYearFirstSemester::class,
            'CETStem' => FirstYearFirstSemesterCET::class,
            'CETNonstem' => NonStemFirstYearFirstSemesterCET::class,
            'CTStem' => FirstYearFirstSemesterCT::class,
            'CTNonstem' => NonStemFirstYearFirstSemesterCT::class,
            'ETStem' => FirstYearFirstSemesterET::class,
            'ETNonstem' => NonStemFirstYearFirstSemesterET::class,
            'ECTStem' => FirstYearFirstSemesterECT::class,
            'ECTNonstem' => NonStemFirstYearFirstSemesterECT::class,
            'ICTStem' => FirstYearFirstSemesterICT::class,
            'ICTNonstem' => NonStemFirstYearFirstSemesterICT::class,
            'MTStem' => FirstYearFirstSemesterMT::class,
            'MTNonstem' => NonStemFirstYearFirstSemesterMT::class,
            'RTStem' => FirstYearFirstSemesterRT::class,
            'RTNonstem' => NonStemFirstYearFirstSemesterRT::class,
            'ATStem' => FirstYearFirstSemesterAT::class,
            'ATNonstem' => NonStemFirstYearFirstSemesterAT::class,
            'METFTStem' => FirstYearFirstSemesterMETFT::class,
            'METFTNonstem' => NonStemFirstYearFirstSemesterMETFT::class,
            'HVRTStem' => FirstYearFirstSemesterHVRT::class,
            'HVRTNonstem' => NonStemFirstYearFirstSemesterHVRT::class,
            'PPTStem' => FirstYearFirstSemesterPPT::class,
            'PPTNonstem' => NonStemFirstYearFirstSemesterPPT::class,
            'WTStem' => FirstYearFirstSemesterWT::class,
            'WTNonstem' => NonStemFirstYearFirstSemesterWT::class,
            'DMTStem' => FirstYearFirstSemesterDMT::class,
            'DMTNonstem' => NonStemFirstYearFirstSemesterDMT::class,
            'AFStem' => FirstYearFirstSemesterAF::class,
            'AFNonstem' => NonStemFirstYearFirstSemesterAF::class,
            'NFTStem' => FirstYearFirstSemesterNFT::class,
            'NFTNonstem' => NonStemFirstYearFirstSemesterNFT::class,
            'PMTStem' => FirstYearFirstSemesterPMT::class,
            'PMTNonstem' => NonStemFirstYearFirstSemesterPMT::class,



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
