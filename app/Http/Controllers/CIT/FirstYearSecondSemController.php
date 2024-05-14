<?php

namespace App\Http\Controllers\CIT;
use App\Http\Resources\FirstYearSecondSemResource;
use App\Models\CIT\FT\FirstYearSecondSemester;
use App\Models\CIT\FT\NonStemFirstYearSecondSemester;
use App\Models\CIT\CET\FirstYearSecondSemesterCET;
use App\Models\CIT\CET\NonStemFirstYearSecondSemesterCET;
use App\Models\CIT\CT\FirstYearSecondSemesterCT;
use App\Models\CIT\CT\NonStemFirstYearSecondSemesterCT;
use App\Models\CIT\ET\FirstYearSecondSemesterET;
use App\Models\CIT\ET\NonStemFirstYearSecondSemesterET;
use App\Models\CIT\ECT\FirstYearSecondSemesterECT;
use App\Models\CIT\ECT\NonStemFirstYearSecondSemesterECT;
use App\Models\CIT\ICT\FirstYearSecondSemesterICT;
use App\Models\CIT\ICT\NonStemFirstYearSecondSemesterICT;
use App\Models\CIT\MT\FirstYearSecondSemesterMT;
use App\Models\CIT\MT\NonStemFirstYearSecondSemesterMT;
use App\Models\CIT\RT\FirstYearSecondSemesterRT;
use App\Models\CIT\RT\NonStemFirstYearSecondSemesterRT;
use App\Models\CIT\AT\FirstYearSecondSemesterAT;
use App\Models\CIT\AT\NonStemFirstYearSecondSemesterAT;
use App\Models\CIT\METFT\FirstYearSecondSemesterMETFT;
use App\Models\CIT\METFT\NonStemFirstYearSecondSemesterMETFT;
use App\Models\CIT\HV_RT\FirstYearSecondSemesterHV_RT;
use App\Models\CIT\HV_RT\NonStemFirstYearSecondSemesterHV_RT;
use App\Models\CIT\PPT\FirstYearSecondSemesterPPT;
use App\Models\CIT\PPT\NonStemFirstYearSecondSemesterPPT;
use App\Models\CIT\WT\FirstYearSecondSemesterWT;
use App\Models\CIT\WT\NonStemFirstYearSecondSemesterWT;
use App\Models\CIT\DMT\FirstYearSecondSemesterDMT;
use App\Models\CIT\DMT\NonStemFirstYearSecondSemesterDMT;
use App\Models\CIT\AF\FirstYearSecondSemesterAF;
use App\Models\CIT\AF\NonStemFirstYearSecondSemesterAF;
use App\Models\CIT\NFT\FirstYearSecondSemesterNFT;
use App\Models\CIT\NFT\NonStemFirstYearSecondSemesterNFT;
use App\Models\CIT\PMT\FirstYearSecondSemesterPMT;
use App\Models\CIT\PMT\NonStemFirstYearSecondSemesterPMT;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFirstYearFirstSemesterRequest;
use App\Http\Requests\UpdateFirstYearSecondSemesterRequest;
use Inertia\Inertia;
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
            'FTStem' => "Semester/CIT/FT/CreateFirstYearSecondSem",
            'FTNonstem' => "Semester/CIT/FT/CreateFirstYearSecondSemNonstem",
            'CETStem' => "Semester/CIT/CET/CreateFirstYearSecondSem",
            'CETNonstem' => "Semester/CIT/CET/CreateFirstYearSecondSemNonstem",
            'CTStem' => "Semester/CIT/CT/CreateFirstYearSecondSem",
            'CTNonstem' => "Semester/CIT/CT/CreateFirstYearSecondSemNonstem",
            'ETStem' => "Semester/CIT/ET/CreateFirstYearSecondSem",
            'ETNonstem' => "Semester/CIT/ET/CreateFirstYearSecondSemNonstem",
            'ECTStem' => "Semester/CIT/ECT/CreateFirstYearSecondSem",
            'ECTNonstem' => "Semester/CIT/ECT/CreateFirstYearSecondSemNonstem",
            'ICTStem' => "Semester/CIT/ICT/CreateFirstYearSecondSem",
            'ICTNonstem' => "Semester/CIT/ICT/CreateFirstYearSecondSemNonstem",
            'MTStem' => "Semester/CIT/MT/CreateFirstYearSecondSem",
            'MTNonstem' => "Semester/CIT/MT/CreateFirstYearSecondSemNonstem",
            'RTStem' => "Semester/CIT/RT/CreateFirstYearSecondSem",
            'RTNonstem' => "Semester/CIT/RT/CreateFirstYearSecondSemNonstem",
            'ATStem' => "Semester/CIT/AT/CreateFirstYearSecondSem",
            'ATNonstem' => "Semester/CIT/AT/CreateFirstYearSecondSemNonstem",
            'METFTStem' => "Semester/CIT/METFT/CreateFirstYearSecondSem",
            'METFTNonstem' => "Semester/CIT/METFT/CreateFirstYearSecondSemNonstem",
            'HV_RTStem' => "Semester/CIT/HV_RT/CreateFirstYearSecondSem",
            'HV_RTNonstem' => "Semester/CIT/HV_RT/CreateFirstYearSecondSemNonstem",
            'PPTStem' => "Semester/CIT/PPT/CreateFirstYearSecondSem",
            'PPTNonstem' => "Semester/CIT/PPT/CreateFirstYearSecondSemNonstem",
            'WTStem' => "Semester/CIT/WT/CreateFirstYearSecondSem",
            'WTNonstem' => "Semester/CIT/WT/CreateFirstYearSecondSemNonstem",
            'NFTStem' => "Semester/CIT/NFT/CreateFirstYearSecondSem",
            'NFTNonstem' => "Semester/CIT/NFT/CreateFirstYearSecondSemNonstem",
            'PMTStem' => "Semester/CIT/PMT/CreateFirstYearSecondSem",
            'PMTNonstem' => "Semester/CIT/PMT/CreateFirstYearSecondSemNonstem",
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
            'FTStem' => FirstYearSecondSemester::class,
            'FTNonstem' => NonStemFirstYearSecondSemester::class,
            'CETStem' => FirstYearSecondSemesterCET::class,
            'CETNonstem' => NonStemFirstYearSecondSemesterCET::class,
            'CTStem' => FirstYearSecondSemesterCT::class,
            'CTNonstem' => NonStemFirstYearSecondSemesterCT::class,
            'ETStem' => FirstYearSecondSemesterET::class,
            'ETNonstem' => NonStemFirstYearSecondSemesterET::class,
            'ECTStem' => FirstYearSecondSemesterECT::class,
            'ECTNonstem' => NonStemFirstYearSecondSemesterECT::class,
            'ICTStem' => FirstYearSecondSemesterICT::class,
            'ICTNonstem' => NonStemFirstYearSecondSemesterICT::class,
            'MTStem' => FirstYearSecondSemesterMT::class,
            'MTNonstem' => NonStemFirstYearSecondSemesterMT::class,
            'RTStem' => FirstYearSecondSemesterRT::class,
            'RTNonstem' => NonStemFirstYearSecondSemesterRT::class,
            'ATStem' => FirstYearSecondSemesterAT::class,
            'ATNonstem' => NonStemFirstYearSecondSemesterAT::class,
            'METFTStem' => FirstYearSecondSemesterMETFT::class,
            'METFTNonstem' => NonStemFirstYearSecondSemesterMETFT::class,
            'HV_RTStem' => FirstYearSecondSemesterHV_RT::class,
            'HV_RTNonstem' => NonStemFirstYearSecondSemesterHV_RT::class,
            'PPTStem' => FirstYearSecondSemesterPPT::class,
            'PPTNonstem' => NonStemFirstYearSecondSemesterPPT::class,
            'WTStem' => FirstYearSecondSemesterWT::class,
            'WTNonstem' => NonStemFirstYearSecondSemesterWT::class,
            'DMTStem' => FirstYearSecondSemesterDMT::class,
            'DMTNonstem' => NonStemFirstYearSecondSemesterDMT::class,
            'AFStem' => FirstYearSecondSemesterAF::class,
            'AFNonstem' => NonStemFirstYearSecondSemesterAF::class,
            'NFTStem' => FirstYearSecondSemesterNFT::class,
            'NFTNonstem' => NonStemFirstYearSecondSemesterNFT::class,
            'PMTStem' => FirstYearSecondSemesterPMT::class,
            'PMTNonstem' => NonStemFirstYearSecondSemesterPMT::class,
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
