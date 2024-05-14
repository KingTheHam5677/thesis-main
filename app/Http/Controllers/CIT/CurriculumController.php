<?php

namespace App\Http\Controllers\CIT;

use Inertia\Inertia;
use App\Http\Controllers\Controller;
use App\Models\CIT\FT\FirstYearFirstSemester;
use App\Models\CIT\FT\FirstYearSecondSemester;
use App\Models\CIT\FT\SecondYearFirstSemester;
use App\Models\CIT\FT\SecondYearSecondSemester;
use App\Models\CIT\FT\ThirdYearFirstSemester;
use App\Models\CIT\FT\ThirdYearSecondSemester;
use App\Models\CIT\FT\FourthYearFirstSemester;
use App\Models\CIT\FT\FourthYearSecondSemester;
use App\Models\CIT\FT\NonStemFirstYearFirstSemester;
use App\Models\CIT\FT\NonStemFirstYearSecondSemester;
use App\Models\CIT\FT\NonStemSecondYearFirstSemester;
use App\Models\CIT\FT\NonStemSecondYearSecondSemester;
use App\Models\CIT\FT\NonStemThirdYearFirstSemester;
use App\Models\CIT\FT\NonStemThirdYearSecondSemester;
use App\Models\CIT\FT\NonStemFourthYearFirstSemester;
use App\Models\CIT\FT\NonStemFourthYearSecondSemester;
use App\Models\CIT\CET\FirstYearFirstSemesterCET;
use App\Models\CIT\CET\FirstYearSecondSemesterCET;
use App\Models\CIT\CET\SecondYearFirstSemesterCET;
use App\Models\CIT\CET\SecondYearSecondSemesterCET;
use App\Models\CIT\CET\ThirdYearFirstSemesterCET;
use App\Models\CIT\CET\ThirdYearSecondSemesterCET;
use App\Models\CIT\CET\FourthYearFirstSemesterCET;
use App\Models\CIT\CET\FourthYearSecondSemesterCET;
use App\Models\CIT\CET\NonStemFirstYearFirstSemesterCET;
use App\Models\CIT\CET\NonStemFirstYearSecondSemesterCET;
use App\Models\CIT\CET\NonStemSecondYearFirstSemesterCET;
use App\Models\CIT\CET\NonStemSecondYearSecondSemesterCET;
use App\Models\CIT\CET\NonStemThirdYearFirstSemesterCET;
use App\Models\CIT\CET\NonStemThirdYearSecondSemesterCET;
use App\Models\CIT\CET\NonStemFourthYearFirstSemesterCET;
use App\Models\CIT\CET\NonStemFourthYearSecondSemesterCET;;
use App\Models\CIT\CT\FirstYearFirstSemesterCT;
use App\Models\CIT\CT\FirstYearSecondSemesterCT;
use App\Models\CIT\CT\SecondYearFirstSemesterCT;
use App\Models\CIT\CT\SecondYearSecondSemesterCT;
use App\Models\CIT\CT\ThirdYearFirstSemesterCT;
use App\Models\CIT\CT\ThirdYearSecondSemesterCT;
use App\Models\CIT\CT\FourthYearFirstSemesterCT;
use App\Models\CIT\CT\FourthYearSecondSemesterCT;
use App\Models\CIT\CT\NonStemFirstYearFirstSemesterCT;
use App\Models\CIT\CT\NonStemFirstYearSecondSemesterCT;
use App\Models\CIT\CT\NonStemSecondYearFirstSemesterCT;
use App\Models\CIT\CT\NonStemSecondYearSecondSemesterCT;
use App\Models\CIT\CT\NonStemThirdYearFirstSemesterCT;
use App\Models\CIT\CT\NonStemThirdYearSecondSemesterCT;
use App\Models\CIT\CT\NonStemFourthYearFirstSemesterCT;
use App\Models\CIT\CT\NonStemFourthYearSecondSemesterCT;
use App\Models\CIT\ET\FirstYearFirstSemesterET;
use App\Models\CIT\ET\FirstYearSecondSemesterET;
use App\Models\CIT\ET\SecondYearFirstSemesterET;
use App\Models\CIT\ET\SecondYearSecondSemesterET;
use App\Models\CIT\ET\ThirdYearFirstSemesterET;
use App\Models\CIT\ET\ThirdYearSecondSemesterET;
use App\Models\CIT\ET\FourthYearFirstSemesterET;
use App\Models\CIT\ET\FourthYearSecondSemesterET;
use App\Models\CIT\ET\NonStemFirstYearFirstSemesterET;
use App\Models\CIT\ET\NonStemFirstYearSecondSemesterET;
use App\Models\CIT\ET\NonStemSecondYearFirstSemesterET;
use App\Models\CIT\ET\NonStemSecondYearSecondSemesterET;
use App\Models\CIT\ET\NonStemThirdYearFirstSemesterET;
use App\Models\CIT\ET\NonStemThirdYearSecondSemesterET;
use App\Models\CIT\ET\NonStemFourthYearFirstSemesterET;
use App\Models\CIT\ET\NonStemFourthYearSecondSemesterET;
use App\Models\CIT\ECT\FirstYearFirstSemesterECT;
use App\Models\CIT\ECT\FirstYearSecondSemesterECT;
use App\Models\CIT\ECT\SecondYearFirstSemesterECT;
use App\Models\CIT\ECT\SecondYearSecondSemesterECT;
use App\Models\CIT\ECT\ThirdYearFirstSemesterECT;
use App\Models\CIT\ECT\ThirdYearSecondSemesterECT;
use App\Models\CIT\ECT\FourthYearFirstSemesterECT;
use App\Models\CIT\ECT\FourthYearSecondSemesterECT;
use App\Models\CIT\ECT\NonStemFirstYearFirstSemesterECT;
use App\Models\CIT\ECT\NonStemFirstYearSecondSemesterECT;
use App\Models\CIT\ECT\NonStemSecondYearFirstSemesterECT;
use App\Models\CIT\ECT\NonStemSecondYearSecondSemesterECT;
use App\Models\CIT\ECT\NonStemThirdYearFirstSemesterECT;
use App\Models\CIT\ECT\NonStemThirdYearSecondSemesterECT;
use App\Models\CIT\ECT\NonStemFourthYearFirstSemesterECT;
use App\Models\CIT\ECT\NonStemFourthYearSecondSemesterECT;
use App\Models\CIT\ICT\FirstYearFirstSemesterICT;
use App\Models\CIT\ICT\FirstYearSecondSemesterICT;
use App\Models\CIT\ICT\SecondYearFirstSemesterICT;
use App\Models\CIT\ICT\SecondYearSecondSemesterICT;
use App\Models\CIT\ICT\ThirdYearFirstSemesterICT;
use App\Models\CIT\ICT\ThirdYearSecondSemesterICT;
use App\Models\CIT\ICT\FourthYearFirstSemesterICT;
use App\Models\CIT\ICT\FourthYearSecondSemesterICT;
use App\Models\CIT\ICT\NonStemFirstYearFirstSemesterICT;
use App\Models\CIT\ICT\NonStemFirstYearSecondSemesterICT;
use App\Models\CIT\ICT\NonStemSecondYearFirstSemesterICT;
use App\Models\CIT\ICT\NonStemSecondYearSecondSemesterICT;
use App\Models\CIT\ICT\NonStemThirdYearFirstSemesterICT;
use App\Models\CIT\ICT\NonStemThirdYearSecondSemesterICT;
use App\Models\CIT\ICT\NonStemFourthYearFirstSemesterICT;
use App\Models\CIT\ICT\NonStemFourthYearSecondSemesterICT;
use App\Models\CIT\MT\FirstYearFirstSemesterMT;
use App\Models\CIT\MT\FirstYearSecondSemesterMT;
use App\Models\CIT\MT\SecondYearFirstSemesterMT;
use App\Models\CIT\MT\SecondYearSecondSemesterMT;
use App\Models\CIT\MT\ThirdYearFirstSemesterMT;
use App\Models\CIT\MT\ThirdYearSecondSemesterMT;
use App\Models\CIT\MT\FourthYearFirstSemesterMT;
use App\Models\CIT\MT\FourthYearSecondSemesterMT;
use App\Models\CIT\MT\NonStemFirstYearFirstSemesterMT;
use App\Models\CIT\MT\NonStemFirstYearSecondSemesterMT;
use App\Models\CIT\MT\NonStemSecondYearFirstSemesterMT;
use App\Models\CIT\MT\NonStemSecondYearSecondSemesterMT;
use App\Models\CIT\MT\NonStemThirdYearFirstSemesterMT;
use App\Models\CIT\MT\NonStemThirdYearSecondSemesterMT;
use App\Models\CIT\MT\NonStemFourthYearFirstSemesterMT;
use App\Models\CIT\MT\NonStemFourthYearSecondSemesterMT;
use App\Models\CIT\RT\FirstYearFirstSemesterRT;
use App\Models\CIT\RT\FirstYearSecondSemesterRT;
use App\Models\CIT\RT\SecondYearFirstSemesterRT;
use App\Models\CIT\RT\SecondYearSecondSemesterRT;
use App\Models\CIT\RT\ThirdYearFirstSemesterRT;
use App\Models\CIT\RT\ThirdYearSecondSemesterRT;
use App\Models\CIT\RT\FourthYearFirstSemesterRT;
use App\Models\CIT\RT\FourthYearSecondSemesterRT;
use App\Models\CIT\RT\NonStemFirstYearFirstSemesterRT;
use App\Models\CIT\RT\NonStemFirstYearSecondSemesterRT;
use App\Models\CIT\RT\NonStemSecondYearFirstSemesterRT;
use App\Models\CIT\RT\NonStemSecondYearSecondSemesterRT;
use App\Models\CIT\RT\NonStemThirdYearFirstSemesterRT;
use App\Models\CIT\RT\NonStemThirdYearSecondSemesterRT;
use App\Models\CIT\RT\NonStemFourthYearFirstSemesterRT;
use App\Models\CIT\RT\NonStemFourthYearSecondSemesterRT;
use App\Models\CIT\AT\FirstYearFirstSemesterAT;
use App\Models\CIT\AT\FirstYearSecondSemesterAT;
use App\Models\CIT\AT\SecondYearFirstSemesterAT;
use App\Models\CIT\AT\SecondYearSecondSemesterAT;
use App\Models\CIT\AT\ThirdYearFirstSemesterAT;
use App\Models\CIT\AT\ThirdYearSecondSemesterAT;
use App\Models\CIT\AT\FourthYearFirstSemesterAT;
use App\Models\CIT\AT\FourthYearSecondSemesterAT;
use App\Models\CIT\AT\NonStemFirstYearFirstSemesterAT;
use App\Models\CIT\AT\NonStemFirstYearSecondSemesterAT;
use App\Models\CIT\AT\NonStemSecondYearFirstSemesterAT;
use App\Models\CIT\AT\NonStemSecondYearSecondSemesterAT;
use App\Models\CIT\AT\NonStemThirdYearFirstSemesterAT;
use App\Models\CIT\AT\NonStemThirdYearSecondSemesterAT;
use App\Models\CIT\AT\NonStemFourthYearFirstSemesterAT;
use App\Models\CIT\AT\NonStemFourthYearSecondSemesterAT;
use App\Models\CIT\METFT\FirstYearFirstSemesterMETFT;
use App\Models\CIT\METFT\FirstYearSecondSemesterMETFT;
use App\Models\CIT\METFT\SecondYearFirstSemesterMETFT;
use App\Models\CIT\METFT\SecondYearSecondSemesterMETFT;
use App\Models\CIT\METFT\ThirdYearFirstSemesterMETFT;
use App\Models\CIT\METFT\ThirdYearSecondSemesterMETFT;
use App\Models\CIT\METFT\FourthYearFirstSemesterMETFT;
use App\Models\CIT\METFT\FourthYearSecondSemesterMETFT;
use App\Models\CIT\METFT\NonStemFirstYearFirstSemesterMETFT;
use App\Models\CIT\METFT\NonStemFirstYearSecondSemesterMETFT;
use App\Models\CIT\METFT\NonStemSecondYearFirstSemesterMETFT;
use App\Models\CIT\METFT\NonStemSecondYearSecondSemesterMETFT;
use App\Models\CIT\METFT\NonStemThirdYearFirstSemesterMETFT;
use App\Models\CIT\METFT\NonStemThirdYearSecondSemesterMETFT;
use App\Models\CIT\METFT\NonStemFourthYearFirstSemesterMETFT;
use App\Models\CIT\METFT\NonStemFourthYearSecondSemesterMETFT;
use App\Models\CIT\HV_RT\FirstYearFirstSemesterHV_RT;
use App\Models\CIT\HV_RT\FirstYearSecondSemesterHV_RT;
use App\Models\CIT\HV_RT\SecondYearFirstSemesterHV_RT;
use App\Models\CIT\HV_RT\SecondYearSecondSemesterHV_RT;
use App\Models\CIT\HV_RT\ThirdYearFirstSemesterHV_RT;
use App\Models\CIT\HV_RT\ThirdYearSecondSemesterHV_RT;
use App\Models\CIT\HV_RT\FourthYearFirstSemesterHV_RT;
use App\Models\CIT\HV_RT\FourthYearSecondSemesterHV_RT;
use App\Models\CIT\HV_RT\NonStemFirstYearFirstSemesterHV_RT;
use App\Models\CIT\HV_RT\NonStemFirstYearSecondSemesterHV_RT;
use App\Models\CIT\HV_RT\NonStemSecondYearFirstSemesterHV_RT;
use App\Models\CIT\HV_RT\NonStemSecondYearSecondSemesterHV_RT;
use App\Models\CIT\HV_RT\NonStemThirdYearFirstSemesterHV_RT;
use App\Models\CIT\HV_RT\NonStemThirdYearSecondSemesterHV_RT;
use App\Models\CIT\HV_RT\NonStemFourthYearFirstSemesterHV_RT;
use App\Models\CIT\HV_RT\NonStemFourthYearSecondSemesterHV_RT;
use App\Models\CIT\PPT\FirstYearFirstSemesterPPT;
use App\Models\CIT\PPT\FirstYearSecondSemesterPPT;
use App\Models\CIT\PPT\SecondYearFirstSemesterPPT;
use App\Models\CIT\PPT\SecondYearSecondSemesterPPT;
use App\Models\CIT\PPT\ThirdYearFirstSemesterPPT;
use App\Models\CIT\PPT\ThirdYearSecondSemesterPPT;
use App\Models\CIT\PPT\FourthYearFirstSemesterPPT;
use App\Models\CIT\PPT\FourthYearSecondSemesterPPT;
use App\Models\CIT\PPT\NonStemFirstYearFirstSemesterPPT;
use App\Models\CIT\PPT\NonStemFirstYearSecondSemesterPPT;
use App\Models\CIT\PPT\NonStemSecondYearFirstSemesterPPT;
use App\Models\CIT\PPT\NonStemSecondYearSecondSemesterPPT;
use App\Models\CIT\PPT\NonStemThirdYearFirstSemesterPPT;
use App\Models\CIT\PPT\NonStemThirdYearSecondSemesterPPT;
use App\Models\CIT\PPT\NonStemFourthYearFirstSemesterPPT;
use App\Models\CIT\PPT\NonStemFourthYearSecondSemesterPPT;
use App\Models\CIT\WT\FirstYearFirstSemesterWT;
use App\Models\CIT\WT\FirstYearSecondSemesterWT;
use App\Models\CIT\WT\SecondYearFirstSemesterWT;
use App\Models\CIT\WT\SecondYearSecondSemesterWT;
use App\Models\CIT\WT\ThirdYearFirstSemesterWT;
use App\Models\CIT\WT\ThirdYearSecondSemesterWT;
use App\Models\CIT\WT\FourthYearFirstSemesterWT;
use App\Models\CIT\WT\FourthYearSecondSemesterWT;
use App\Models\CIT\WT\NonStemFirstYearFirstSemesterWT;
use App\Models\CIT\WT\NonStemFirstYearSecondSemesterWT;
use App\Models\CIT\WT\NonStemSecondYearFirstSemesterWT;
use App\Models\CIT\WT\NonStemSecondYearSecondSemesterWT;
use App\Models\CIT\WT\NonStemThirdYearFirstSemesterWT;
use App\Models\CIT\WT\NonStemThirdYearSecondSemesterWT;
use App\Models\CIT\WT\NonStemFourthYearFirstSemesterWT;
use App\Models\CIT\WT\NonStemFourthYearSecondSemesterWT;
use App\Models\CIT\DMT\FirstYearFirstSemesterDMT;
use App\Models\CIT\DMT\FirstYearSecondSemesterDMT;
use App\Models\CIT\DMT\SecondYearFirstSemesterDMT;
use App\Models\CIT\DMT\SecondYearSecondSemesterDMT;
use App\Models\CIT\DMT\ThirdYearFirstSemesterDMT;
use App\Models\CIT\DMT\ThirdYearSecondSemesterDMT;
use App\Models\CIT\DMT\FourthYearFirstSemesterDMT;
use App\Models\CIT\DMT\FourthYearSecondSemesterDMT;
use App\Models\CIT\DMT\NonStemFirstYearFirstSemesterDMT;
use App\Models\CIT\DMT\NonStemFirstYearSecondSemesterDMT;
use App\Models\CIT\DMT\NonStemSecondYearFirstSemesterDMT;
use App\Models\CIT\DMT\NonStemSecondYearSecondSemesterDMT;
use App\Models\CIT\DMT\NonStemThirdYearFirstSemesterDMT;
use App\Models\CIT\DMT\NonStemThirdYearSecondSemesterDMT;
use App\Models\CIT\DMT\NonStemFourthYearFirstSemesterDMT;
use App\Models\CIT\DMT\NonStemFourthYearSecondSemesterDMT;
use App\Models\CIT\AF\FirstYearFirstSemesterAF;
use App\Models\CIT\AF\FirstYearSecondSemesterAF;
use App\Models\CIT\AF\SecondYearFirstSemesterAF;
use App\Models\CIT\AF\SecondYearSecondSemesterAF;
use App\Models\CIT\AF\ThirdYearFirstSemesterAF;
use App\Models\CIT\AF\ThirdYearSecondSemesterAF;
use App\Models\CIT\AF\FourthYearFirstSemesterAF;
use App\Models\CIT\AF\FourthYearSecondSemesterAF;
use App\Models\CIT\AF\NonStemFirstYearFirstSemesterAF;
use App\Models\CIT\AF\NonStemFirstYearSecondSemesterAF;
use App\Models\CIT\AF\NonStemSecondYearFirstSemesterAF;
use App\Models\CIT\AF\NonStemSecondYearSecondSemesterAF;
use App\Models\CIT\AF\NonStemThirdYearFirstSemesterAF;
use App\Models\CIT\AF\NonStemThirdYearSecondSemesterAF;
use App\Models\CIT\AF\NonStemFourthYearFirstSemesterAF;
use App\Models\CIT\AF\NonStemFourthYearSecondSemesterAF;
use App\Models\CIT\NFT\FirstYearFirstSemesterNFT;
use App\Models\CIT\NFT\FirstYearSecondSemesterNFT;
use App\Models\CIT\NFT\SecondYearFirstSemesterNFT;
use App\Models\CIT\NFT\SecondYearSecondSemesterNFT;
use App\Models\CIT\NFT\ThirdYearFirstSemesterNFT;
use App\Models\CIT\NFT\ThirdYearSecondSemesterNFT;
use App\Models\CIT\NFT\FourthYearFirstSemesterNFT;
use App\Models\CIT\NFT\FourthYearSecondSemesterNFT;
use App\Models\CIT\NFT\NonStemFirstYearFirstSemesterNFT;
use App\Models\CIT\NFT\NonStemFirstYearSecondSemesterNFT;
use App\Models\CIT\NFT\NonStemSecondYearFirstSemesterNFT;
use App\Models\CIT\NFT\NonStemSecondYearSecondSemesterNFT;
use App\Models\CIT\NFT\NonStemThirdYearFirstSemesterNFT;
use App\Models\CIT\NFT\NonStemThirdYearSecondSemesterNFT;
use App\Models\CIT\NFT\NonStemFourthYearFirstSemesterNFT;
use App\Models\CIT\NFT\NonStemFourthYearSecondSemesterNFT;
use App\Models\CIT\PMT\FirstYearFirstSemesterPMT;
use App\Models\CIT\PMT\FirstYearSecondSemesterPMT;
use App\Models\CIT\PMT\SecondYearFirstSemesterPMT;
use App\Models\CIT\PMT\SecondYearSecondSemesterPMT;
use App\Models\CIT\PMT\ThirdYearFirstSemesterPMT;
use App\Models\CIT\PMT\ThirdYearSecondSemesterPMT;
use App\Models\CIT\PMT\FourthYearFirstSemesterPMT;
use App\Models\CIT\PMT\FourthYearSecondSemesterPMT;
use App\Models\CIT\PMT\NonStemFirstYearFirstSemesterPMT;
use App\Models\CIT\PMT\NonStemFirstYearSecondSemesterPMT;
use App\Models\CIT\PMT\NonStemSecondYearFirstSemesterPMT;
use App\Models\CIT\PMT\NonStemSecondYearSecondSemesterPMT;
use App\Models\CIT\PMT\NonStemThirdYearFirstSemesterPMT;
use App\Models\CIT\PMT\NonStemThirdYearSecondSemesterPMT;
use App\Models\CIT\PMT\NonStemFourthYearFirstSemesterPMT;
use App\Models\CIT\PMT\NonStemFourthYearSecondSemesterPMT;



class CurriculumController extends Controller
{
    public function index()
    {
        //FT
        $firstYearFirstSemData = FirstYearFirstSemester::all();
        $firstYearSecondSemData = FirstYearSecondSemester::all();
        $secondYearFirstSemData = SecondYearFirstSemester::all();
        $secondYearSecondSemData = SecondYearSecondSemester::all();
        $thirdYearFirstSemData = ThirdYearFirstSemester::all();
        $thirdYearSecondSemData = ThirdYearSecondSemester::all();
        $fourthYearFirstSemData = FourthYearFirstSemester::all();
        $fourthYearSecondSemData = FourthYearSecondSemester::all();
        $firstYearFirstSemNonstemData = NonStemFirstYearFirstSemester::all();
        $firstYearSecondSemNonstemData = NonStemFirstYearSecondSemester::all();
        $secondYearFirstSemNonstemData = NonStemSecondYearFirstSemester::all();
        $secondYearSecondSemNonstemData = NonStemSecondYearSecondSemester::all();
        $thirdYearFirstSemNonstemData = NonStemThirdYearFirstSemester::all();
        $thirdYearSecondSemNonstemData = NonStemThirdYearSecondSemester::all();
        $fourthYearFirstSemNonstemData = NonStemFourthYearFirstSemester::all();
        $fourthYearSecondSemNonstemData = NonStemFourthYearSecondSemester::all();

        //CET
        $firstYearFirstSemDataCET = FirstYearFirstSemesterCET::all();
        $firstYearSecondSemDataCET = FirstYearSecondSemesterCET::all();
        $secondYearFirstSemDataCET = SecondYearFirstSemesterCET::all();
        $secondYearSecondSemDataCET = SecondYearSecondSemesterCET::all();
        $thirdYearFirstSemDataCET = ThirdYearFirstSemesterCET::all();
        $thirdYearSecondSemDataCET = ThirdYearSecondSemesterCET::all();
        $fourthYearFirstSemDataCET = FourthYearFirstSemesterCET::all();
        $fourthYearSecondSemDataCET = FourthYearSecondSemesterCET::all();
        $firstYearFirstSemNonstemDataCET = NonStemFirstYearFirstSemesterCET::all();
        $firstYearSecondSemNonstemDataCET = NonStemFirstYearSecondSemesterCET::all();
        $secondYearFirstSemNonstemDataCET = NonStemSecondYearFirstSemesterCET::all();
        $secondYearSecondSemNonstemDataCET = NonStemSecondYearSecondSemesterCET::all();
        $thirdYearFirstSemNonstemDataCET = NonStemThirdYearFirstSemesterCET::all();
        $thirdYearSecondSemNonstemDataCET = NonStemThirdYearSecondSemesterCET::all();
        $fourthYearFirstSemNonstemDataCET = NonStemFourthYearFirstSemesterCET::all();
        $fourthYearSecondSemNonstemDataCET = NonStemFourthYearSecondSemesterCET::all();

        //CT
        $firstYearFirstSemDataCT = FirstYearFirstSemesterCT::all();
        $firstYearSecondSemDataCT = FirstYearSecondSemesterCT::all();
        $secondYearFirstSemDataCT = SecondYearFirstSemesterCT::all();
        $secondYearSecondSemDataCT = SecondYearSecondSemesterCT::all();
        $thirdYearFirstSemDataCT = ThirdYearFirstSemesterCT::all();
        $thirdYearSecondSemDataCT = ThirdYearSecondSemesterCT::all();
        $fourthYearFirstSemDataCT = FourthYearFirstSemesterCT::all();
        $fourthYearSecondSemDataCT = FourthYearSecondSemesterCT::all();
        $firstYearFirstSemNonstemDataCT = NonStemFirstYearFirstSemesterCT::all();
        $firstYearSecondSemNonstemDataCT = NonStemFirstYearSecondSemesterCT::all();
        $secondYearFirstSemNonstemDataCT = NonStemSecondYearFirstSemesterCT::all();
        $secondYearSecondSemNonstemDataCT = NonStemSecondYearSecondSemesterCT::all();
        $thirdYearFirstSemNonstemDataCT = NonStemThirdYearFirstSemesterCT::all();
        $thirdYearSecondSemNonstemDataCT = NonStemThirdYearSecondSemesterCT::all();
        $fourthYearFirstSemNonstemDataCT = NonStemFourthYearFirstSemesterCT::all();
        $fourthYearSecondSemNonstemDataCT = NonStemFourthYearSecondSemesterCT::all();

         //ET
         $firstYearFirstSemDataET = FirstYearFirstSemesterET::all();
         $firstYearSecondSemDataET = FirstYearSecondSemesterET::all();
         $secondYearFirstSemDataET = SecondYearFirstSemesterET::all();
         $secondYearSecondSemDataET = SecondYearSecondSemesterET::all();
         $thirdYearFirstSemDataET = ThirdYearFirstSemesterET::all();
         $thirdYearSecondSemDataET = ThirdYearSecondSemesterET::all();
         $fourthYearFirstSemDataET = FourthYearFirstSemesterET::all();
         $fourthYearSecondSemDataET = FourthYearSecondSemesterET::all();
         $firstYearFirstSemNonstemDataET = NonStemFirstYearFirstSemesterET::all();
         $firstYearSecondSemNonstemDataET = NonStemFirstYearSecondSemesterET::all();
         $secondYearFirstSemNonstemDataET = NonStemSecondYearFirstSemesterET::all();
         $secondYearSecondSemNonstemDataET = NonStemSecondYearSecondSemesterET::all();
         $thirdYearFirstSemNonstemDataET = NonStemThirdYearFirstSemesterET::all();
         $thirdYearSecondSemNonstemDataET = NonStemThirdYearSecondSemesterET::all();
         $fourthYearFirstSemNonstemDataET = NonStemFourthYearFirstSemesterET::all();
         $fourthYearSecondSemNonstemDataET = NonStemFourthYearSecondSemesterET::all();

         //ECT
        $firstYearFirstSemDataECT = FirstYearFirstSemesterECT::all();
        $firstYearSecondSemDataECT = FirstYearSecondSemesterECT::all();
        $secondYearFirstSemDataECT = SecondYearFirstSemesterECT::all();
        $secondYearSecondSemDataECT = SecondYearSecondSemesterECT::all();
        $thirdYearFirstSemDataECT = ThirdYearFirstSemesterECT::all();
        $thirdYearSecondSemDataECT = ThirdYearSecondSemesterECT::all();
        $fourthYearFirstSemDataECT = FourthYearFirstSemesterECT::all();
        $fourthYearSecondSemDataECT = FourthYearSecondSemesterECT::all();
        $firstYearFirstSemNonstemDataECT = NonStemFirstYearFirstSemesterECT::all();
        $firstYearSecondSemNonstemDataECT = NonStemFirstYearSecondSemesterECT::all();
        $secondYearFirstSemNonstemDataECT = NonStemSecondYearFirstSemesterECT::all();
        $secondYearSecondSemNonstemDataECT = NonStemSecondYearSecondSemesterECT::all();
        $thirdYearFirstSemNonstemDataECT = NonStemThirdYearFirstSemesterECT::all();
        $thirdYearSecondSemNonstemDataECT = NonStemThirdYearSecondSemesterECT::all();
        $fourthYearFirstSemNonstemDataECT = NonStemFourthYearFirstSemesterECT::all();
        $fourthYearSecondSemNonstemDataECT = NonStemFourthYearSecondSemesterECT::all();

        //ICT
        $firstYearFirstSemDataICT = FirstYearFirstSemesterICT::all();
        $firstYearSecondSemDataICT = FirstYearSecondSemesterICT::all();
        $secondYearFirstSemDataICT = SecondYearFirstSemesterICT::all();
        $secondYearSecondSemDataICT = SecondYearSecondSemesterICT::all();
        $thirdYearFirstSemDataICT = ThirdYearFirstSemesterICT::all();
        $thirdYearSecondSemDataICT = ThirdYearSecondSemesterICT::all();
        $fourthYearFirstSemDataICT = FourthYearFirstSemesterICT::all();
        $fourthYearSecondSemDataICT = FourthYearSecondSemesterICT::all();
        $firstYearFirstSemNonstemDataICT = NonStemFirstYearFirstSemesterICT::all();
        $firstYearSecondSemNonstemDataICT = NonStemFirstYearSecondSemesterICT::all();
        $secondYearFirstSemNonstemDataICT = NonStemSecondYearFirstSemesterICT::all();
        $secondYearSecondSemNonstemDataICT = NonStemSecondYearSecondSemesterICT::all();
        $thirdYearFirstSemNonstemDataICT = NonStemThirdYearFirstSemesterICT::all();
        $thirdYearSecondSemNonstemDataICT = NonStemThirdYearSecondSemesterICT::all();
        $fourthYearFirstSemNonstemDataICT = NonStemFourthYearFirstSemesterICT::all();
        $fourthYearSecondSemNonstemDataICT = NonStemFourthYearSecondSemesterICT::all();

        //MT
        $firstYearFirstSemDataMT = FirstYearFirstSemesterMT::all();
        $firstYearSecondSemDataMT = FirstYearSecondSemesterMT::all();
        $secondYearFirstSemDataMT = SecondYearFirstSemesterMT::all();
        $secondYearSecondSemDataMT = SecondYearSecondSemesterMT::all();
        $thirdYearFirstSemDataMT = ThirdYearFirstSemesterMT::all();
        $thirdYearSecondSemDataMT = ThirdYearSecondSemesterMT::all();
        $fourthYearFirstSemDataMT = FourthYearFirstSemesterMT::all();
        $fourthYearSecondSemDataMT = FourthYearSecondSemesterMT::all();
        $firstYearFirstSemNonstemDataMT = NonStemFirstYearFirstSemesterMT::all();
        $firstYearSecondSemNonstemDataMT = NonStemFirstYearSecondSemesterMT::all();
        $secondYearFirstSemNonstemDataMT = NonStemSecondYearFirstSemesterMT::all();
        $secondYearSecondSemNonstemDataMT = NonStemSecondYearSecondSemesterMT::all();
        $thirdYearFirstSemNonstemDataMT = NonStemThirdYearFirstSemesterMT::all();
        $thirdYearSecondSemNonstemDataMT = NonStemThirdYearSecondSemesterMT::all();
        $fourthYearFirstSemNonstemDataMT = NonStemFourthYearFirstSemesterMT::all();
        $fourthYearSecondSemNonstemDataMT = NonStemFourthYearSecondSemesterMT::all();

        //RT
        $firstYearFirstSemDataRT = FirstYearFirstSemesterRT::all();
        $firstYearSecondSemDataRT = FirstYearSecondSemesterRT::all();
        $secondYearFirstSemDataRT = SecondYearFirstSemesterRT::all();
        $secondYearSecondSemDataRT = SecondYearSecondSemesterRT::all();
        $thirdYearFirstSemDataRT = ThirdYearFirstSemesterRT::all();
        $thirdYearSecondSemDataRT = ThirdYearSecondSemesterRT::all();
        $fourthYearFirstSemDataRT = FourthYearFirstSemesterRT::all();
        $fourthYearSecondSemDataRT = FourthYearSecondSemesterRT::all();
        $firstYearFirstSemNonstemDataRT = NonStemFirstYearFirstSemesterRT::all();
        $firstYearSecondSemNonstemDataRT = NonStemFirstYearSecondSemesterRT::all();
        $secondYearFirstSemNonstemDataRT = NonStemSecondYearFirstSemesterRT::all();
        $secondYearSecondSemNonstemDataRT = NonStemSecondYearSecondSemesterRT::all();
        $thirdYearFirstSemNonstemDataRT = NonStemThirdYearFirstSemesterRT::all();
        $thirdYearSecondSemNonstemDataRT = NonStemThirdYearSecondSemesterRT::all();
        $fourthYearFirstSemNonstemDataRT = NonStemFourthYearFirstSemesterRT::all();
        $fourthYearSecondSemNonstemDataRT = NonStemFourthYearSecondSemesterRT::all();

        //AT
        $firstYearFirstSemDataAT = FirstYearFirstSemesterAT::all();
        $firstYearSecondSemDataAT = FirstYearSecondSemesterAT::all();
        $secondYearFirstSemDataAT = SecondYearFirstSemesterAT::all();
        $secondYearSecondSemDataAT = SecondYearSecondSemesterAT::all();
        $thirdYearFirstSemDataAT = ThirdYearFirstSemesterAT::all();
        $thirdYearSecondSemDataAT = ThirdYearSecondSemesterAT::all();
        $fourthYearFirstSemDataAT = FourthYearFirstSemesterAT::all();
        $fourthYearSecondSemDataAT = FourthYearSecondSemesterAT::all();
        $firstYearFirstSemNonstemDataAT = NonStemFirstYearFirstSemesterAT::all();
        $firstYearSecondSemNonstemDataAT = NonStemFirstYearSecondSemesterAT::all();
        $secondYearFirstSemNonstemDataAT = NonStemSecondYearFirstSemesterAT::all();
        $secondYearSecondSemNonstemDataAT = NonStemSecondYearSecondSemesterAT::all();
        $thirdYearFirstSemNonstemDataAT = NonStemThirdYearFirstSemesterAT::all();
        $thirdYearSecondSemNonstemDataAT = NonStemThirdYearSecondSemesterAT::all();
        $fourthYearFirstSemNonstemDataAT = NonStemFourthYearFirstSemesterAT::all();
        $fourthYearSecondSemNonstemDataAT = NonStemFourthYearSecondSemesterAT::all();

        //METFT
        $firstYearFirstSemDataMETFT = FirstYearFirstSemesterMETFT::all();
        $firstYearSecondSemDataMETFT = FirstYearSecondSemesterMETFT::all();
        $secondYearFirstSemDataMETFT = SecondYearFirstSemesterMETFT::all();
        $secondYearSecondSemDataMETFT = SecondYearSecondSemesterMETFT::all();
        $thirdYearFirstSemDataMETFT = ThirdYearFirstSemesterMETFT::all();
        $thirdYearSecondSemDataMETFT = ThirdYearSecondSemesterMETFT::all();
        $fourthYearFirstSemDataMETFT = FourthYearFirstSemesterMETFT::all();
        $fourthYearSecondSemDataMETFT = FourthYearSecondSemesterMETFT::all();
        $firstYearFirstSemNonstemDataMETFT = NonStemFirstYearFirstSemesterMETFT::all();
        $firstYearSecondSemNonstemDataMETFT = NonStemFirstYearSecondSemesterMETFT::all();
        $secondYearFirstSemNonstemDataMETFT = NonStemSecondYearFirstSemesterMETFT::all();
        $secondYearSecondSemNonstemDataMETFT = NonStemSecondYearSecondSemesterMETFT::all();
        $thirdYearFirstSemNonstemDataMETFT = NonStemThirdYearFirstSemesterMETFT::all();
        $thirdYearSecondSemNonstemDataMETFT = NonStemThirdYearSecondSemesterMETFT::all();
        $fourthYearFirstSemNonstemDataMETFT = NonStemFourthYearFirstSemesterMETFT::all();
        $fourthYearSecondSemNonstemDataMETFT = NonStemFourthYearSecondSemesterMETFT::all();

        //HV_RT
        $firstYearFirstSemDataHV_RT = FirstYearFirstSemesterHV_RT::all();
        $firstYearSecondSemDataHV_RT = FirstYearSecondSemesterHV_RT::all();
        $secondYearFirstSemDataHV_RT = SecondYearFirstSemesterHV_RT::all();
        $secondYearSecondSemDataHV_RT = SecondYearSecondSemesterHV_RT::all();
        $thirdYearFirstSemDataHV_RT = ThirdYearFirstSemesterHV_RT::all();
        $thirdYearSecondSemDataHV_RT = ThirdYearSecondSemesterHV_RT::all();
        $fourthYearFirstSemDataHV_RT = FourthYearFirstSemesterHV_RT::all();
        $fourthYearSecondSemDataHV_RT = FourthYearSecondSemesterHV_RT::all();
        $firstYearFirstSemNonstemDataHV_RT = NonStemFirstYearFirstSemesterHV_RT::all();
        $firstYearSecondSemNonstemDataHV_RT = NonStemFirstYearSecondSemesterHV_RT::all();
        $secondYearFirstSemNonstemDataHV_RT = NonStemSecondYearFirstSemesterHV_RT::all();
        $secondYearSecondSemNonstemDataHV_RT = NonStemSecondYearSecondSemesterHV_RT::all();
        $thirdYearFirstSemNonstemDataHV_RT = NonStemThirdYearFirstSemesterHV_RT::all();
        $thirdYearSecondSemNonstemDataHV_RT = NonStemThirdYearSecondSemesterHV_RT::all();
        $fourthYearFirstSemNonstemDataHV_RT = NonStemFourthYearFirstSemesterHV_RT::all();
        $fourthYearSecondSemNonstemDataHV_RT = NonStemFourthYearSecondSemesterHV_RT::all();

        //PPT
        $firstYearFirstSemDataPPT = FirstYearFirstSemesterPPT::all();
        $firstYearSecondSemDataPPT = FirstYearSecondSemesterPPT::all();
        $secondYearFirstSemDataPPT = SecondYearFirstSemesterPPT::all();
        $secondYearSecondSemDataPPT = SecondYearSecondSemesterPPT::all();
        $thirdYearFirstSemDataPPT = ThirdYearFirstSemesterPPT::all();
        $thirdYearSecondSemDataPPT = ThirdYearSecondSemesterPPT::all();
        $fourthYearFirstSemDataPPT = FourthYearFirstSemesterPPT::all();
        $fourthYearSecondSemDataPPT = FourthYearSecondSemesterPPT::all();
        $firstYearFirstSemNonstemDataPPT = NonStemFirstYearFirstSemesterPPT::all();
        $firstYearSecondSemNonstemDataPPT = NonStemFirstYearSecondSemesterPPT::all();
        $secondYearFirstSemNonstemDataPPT = NonStemSecondYearFirstSemesterPPT::all();
        $secondYearSecondSemNonstemDataPPT = NonStemSecondYearSecondSemesterPPT::all();
        $thirdYearFirstSemNonstemDataPPT = NonStemThirdYearFirstSemesterPPT::all();
        $thirdYearSecondSemNonstemDataPPT = NonStemThirdYearSecondSemesterPPT::all();
        $fourthYearFirstSemNonstemDataPPT = NonStemFourthYearFirstSemesterPPT::all();
        $fourthYearSecondSemNonstemDataPPT = NonStemFourthYearSecondSemesterPPT::all();

        //WT
        $firstYearFirstSemDataWT = FirstYearFirstSemesterWT::all();
        $firstYearSecondSemDataWT = FirstYearSecondSemesterWT::all();
        $secondYearFirstSemDataWT = SecondYearFirstSemesterWT::all();
        $secondYearSecondSemDataWT = SecondYearSecondSemesterWT::all();
        $thirdYearFirstSemDataWT = ThirdYearFirstSemesterWT::all();
        $thirdYearSecondSemDataWT = ThirdYearSecondSemesterWT::all();
        $fourthYearFirstSemDataWT = FourthYearFirstSemesterWT::all();
        $fourthYearSecondSemDataWT = FourthYearSecondSemesterWT::all();
        $firstYearFirstSemNonstemDataWT = NonStemFirstYearFirstSemesterWT::all();
        $firstYearSecondSemNonstemDataWT = NonStemFirstYearSecondSemesterWT::all();
        $secondYearFirstSemNonstemDataWT = NonStemSecondYearFirstSemesterWT::all();
        $secondYearSecondSemNonstemDataWT = NonStemSecondYearSecondSemesterWT::all();
        $thirdYearFirstSemNonstemDataWT = NonStemThirdYearFirstSemesterWT::all();
        $thirdYearSecondSemNonstemDataWT = NonStemThirdYearSecondSemesterWT::all();
        $fourthYearFirstSemNonstemDataWT = NonStemFourthYearFirstSemesterWT::all();
        $fourthYearSecondSemNonstemDataWT = NonStemFourthYearSecondSemesterWT::all();

        //DMT
        $firstYearFirstSemDataDMT = FirstYearFirstSemesterDMT::all();
        $firstYearSecondSemDataDMT = FirstYearSecondSemesterDMT::all();
        $secondYearFirstSemDataDMT = SecondYearFirstSemesterDMT::all();
        $secondYearSecondSemDataDMT = SecondYearSecondSemesterDMT::all();
        $thirdYearFirstSemDataDMT = ThirdYearFirstSemesterDMT::all();
        $thirdYearSecondSemDataDMT = ThirdYearSecondSemesterDMT::all();
        $fourthYearFirstSemDataDMT = FourthYearFirstSemesterDMT::all();
        $fourthYearSecondSemDataDMT = FourthYearSecondSemesterDMT::all();
        $firstYearFirstSemNonstemDataDMT = NonStemFirstYearFirstSemesterDMT::all();
        $firstYearSecondSemNonstemDataDMT = NonStemFirstYearSecondSemesterDMT::all();
        $secondYearFirstSemNonstemDataDMT = NonStemSecondYearFirstSemesterDMT::all();
        $secondYearSecondSemNonstemDataDMT = NonStemSecondYearSecondSemesterDMT::all();
        $thirdYearFirstSemNonstemDataDMT = NonStemThirdYearFirstSemesterDMT::all();
        $thirdYearSecondSemNonstemDataDMT = NonStemThirdYearSecondSemesterDMT::all();
        $fourthYearFirstSemNonstemDataDMT = NonStemFourthYearFirstSemesterDMT::all();
        $fourthYearSecondSemNonstemDataDMT = NonStemFourthYearSecondSemesterDMT::all();

        //AF
        $firstYearFirstSemDataAF = FirstYearFirstSemesterAF::all();
        $firstYearSecondSemDataAF = FirstYearSecondSemesterAF::all();
        $secondYearFirstSemDataAF = SecondYearFirstSemesterAF::all();
        $secondYearSecondSemDataAF = SecondYearSecondSemesterAF::all();
        $thirdYearFirstSemDataAF = ThirdYearFirstSemesterAF::all();
        $thirdYearSecondSemDataAF = ThirdYearSecondSemesterAF::all();
        $fourthYearFirstSemDataAF = FourthYearFirstSemesterAF::all();
        $fourthYearSecondSemDataAF = FourthYearSecondSemesterAF::all();
        $firstYearFirstSemNonstemDataAF = NonStemFirstYearFirstSemesterAF::all();
        $firstYearSecondSemNonstemDataAF = NonStemFirstYearSecondSemesterAF::all();
        $secondYearFirstSemNonstemDataAF = NonStemSecondYearFirstSemesterAF::all();
        $secondYearSecondSemNonstemDataAF = NonStemSecondYearSecondSemesterAF::all();
        $thirdYearFirstSemNonstemDataAF = NonStemThirdYearFirstSemesterAF::all();
        $thirdYearSecondSemNonstemDataAF = NonStemThirdYearSecondSemesterAF::all();
        $fourthYearFirstSemNonstemDataAF = NonStemFourthYearFirstSemesterAF::all();
        $fourthYearSecondSemNonstemDataAF = NonStemFourthYearSecondSemesterAF::all();

        //NFT
        $firstYearFirstSemDataNFT = FirstYearFirstSemesterNFT::all();
        $firstYearSecondSemDataNFT = FirstYearSecondSemesterNFT::all();
        $secondYearFirstSemDataNFT = SecondYearFirstSemesterNFT::all();
        $secondYearSecondSemDataNFT = SecondYearSecondSemesterNFT::all();
        $thirdYearFirstSemDataNFT = ThirdYearFirstSemesterNFT::all();
        $thirdYearSecondSemDataNFT = ThirdYearSecondSemesterNFT::all();
        $fourthYearFirstSemDataNFT = FourthYearFirstSemesterNFT::all();
        $fourthYearSecondSemDataNFT = FourthYearSecondSemesterNFT::all();
        $firstYearFirstSemNonstemDataNFT = NonStemFirstYearFirstSemesterNFT::all();
        $firstYearSecondSemNonstemDataNFT = NonStemFirstYearSecondSemesterNFT::all();
        $secondYearFirstSemNonstemDataNFT = NonStemSecondYearFirstSemesterNFT::all();
        $secondYearSecondSemNonstemDataNFT = NonStemSecondYearSecondSemesterNFT::all();
        $thirdYearFirstSemNonstemDataNFT = NonStemThirdYearFirstSemesterNFT::all();
        $thirdYearSecondSemNonstemDataNFT = NonStemThirdYearSecondSemesterNFT::all();
        $fourthYearFirstSemNonstemDataNFT = NonStemFourthYearFirstSemesterNFT::all();
        $fourthYearSecondSemNonstemDataNFT = NonStemFourthYearSecondSemesterNFT::all();

        //PMT
        $firstYearFirstSemDataPMT = FirstYearFirstSemesterPMT::all();
        $firstYearSecondSemDataPMT = FirstYearSecondSemesterPMT::all();
        $secondYearFirstSemDataPMT = SecondYearFirstSemesterPMT::all();
        $secondYearSecondSemDataPMT = SecondYearSecondSemesterPMT::all();
        $thirdYearFirstSemDataPMT = ThirdYearFirstSemesterPMT::all();
        $thirdYearSecondSemDataPMT = ThirdYearSecondSemesterPMT::all();
        $fourthYearFirstSemDataPMT = FourthYearFirstSemesterPMT::all();
        $fourthYearSecondSemDataPMT = FourthYearSecondSemesterPMT::all();
        $firstYearFirstSemNonstemDataPMT = NonStemFirstYearFirstSemesterPMT::all();
        $firstYearSecondSemNonstemDataPMT = NonStemFirstYearSecondSemesterPMT::all();
        $secondYearFirstSemNonstemDataPMT = NonStemSecondYearFirstSemesterPMT::all();
        $secondYearSecondSemNonstemDataPMT = NonStemSecondYearSecondSemesterPMT::all();
        $thirdYearFirstSemNonstemDataPMT = NonStemThirdYearFirstSemesterPMT::all();
        $thirdYearSecondSemNonstemDataPMT = NonStemThirdYearSecondSemesterPMT::all();
        $fourthYearFirstSemNonstemDataPMT = NonStemFourthYearFirstSemesterPMT::all();
        $fourthYearSecondSemNonstemDataPMT = NonStemFourthYearSecondSemesterPMT::all();

       



        // Return Inertia response with all semester data
        return Inertia::render('Curriculum', [

            //FT
            'firstyearfirstsem' => $firstYearFirstSemData,
            'firstyearsecondsem' => $firstYearSecondSemData,
            'secondyearfirstsem' => $secondYearFirstSemData,
            'secondyearsecondsem' => $secondYearSecondSemData,
            'thirdyearfirstsem' => $thirdYearFirstSemData,
            'thirdyearsecondsem' => $thirdYearSecondSemData,
            'fourthyearfirstsem' => $fourthYearFirstSemData,
            'fourthyearsecondsem' => $fourthYearSecondSemData,
            'firstyearfirstsemnonstem' => $firstYearFirstSemNonstemData,
            'firstyearsecondsemnonstem' => $firstYearSecondSemNonstemData,
            'secondyearfirstsemnonstem' => $secondYearFirstSemNonstemData,
            'secondyearsecondsemnonstem' => $secondYearSecondSemNonstemData,
            'thirdyearfirstsemnonstem' => $thirdYearFirstSemNonstemData,
            'thirdyearsecondsemnonstem' => $thirdYearSecondSemNonstemData,
            'fourthyearfirstsemnonstem' => $fourthYearFirstSemNonstemData,
            'fourthyearsecondsemnonstem' => $fourthYearSecondSemNonstemData,

            //CET
            'firstyearfirstsemCET' => $firstYearFirstSemDataCET,
            'firstyearsecondsemCET' => $firstYearSecondSemDataCET,
            'secondyearfirstsemCET' => $secondYearFirstSemDataCET,
            'secondyearsecondsemCET' => $secondYearSecondSemDataCET,
            'thirdyearfirstsemCET' => $thirdYearFirstSemDataCET,
            'thirdyearsecondsemCET' => $thirdYearSecondSemDataCET,
            'fourthyearfirstsemCET' => $fourthYearFirstSemDataCET,
            'fourthyearsecondsemCET' => $fourthYearSecondSemDataCET,
            'firstyearfirstsemnonstemCET' => $firstYearFirstSemNonstemDataCET,
            'firstyearsecondsemnonstemCET' => $firstYearSecondSemNonstemDataCET,
            'secondyearfirstsemnonstemCET' => $secondYearFirstSemNonstemDataCET,
            'secondyearsecondsemnonstemCET' => $secondYearSecondSemNonstemDataCET,
            'thirdyearfirstsemnonstemCET' => $thirdYearFirstSemNonstemDataCET,
            'thirdyearsecondsemnonstemCET' => $thirdYearSecondSemNonstemDataCET,
            'fourthyearfirstsemnonstemCET' => $fourthYearFirstSemNonstemDataCET,
            'fourthyearsecondsemnonstemCET' => $fourthYearSecondSemNonstemDataCET,

            //CT
            'firstyearfirstsemCT' => $firstYearFirstSemDataCT,
            'firstyearsecondsemCT' => $firstYearSecondSemDataCT,
            'secondyearfirstsemCT' => $secondYearFirstSemDataCT,
            'secondyearsecondsemCT' => $secondYearSecondSemDataCT,
            'thirdyearfirstsemCT' => $thirdYearFirstSemDataCT,
            'thirdyearsecondsemCT' => $thirdYearSecondSemDataCT,
            'fourthyearfirstsemCT' => $fourthYearFirstSemDataCT,
            'fourthyearsecondsemCT' => $fourthYearSecondSemDataCT,
            'firstyearfirstsemnonstemCT' => $firstYearFirstSemNonstemDataCT,
            'firstyearsecondsemnonstemCT' => $firstYearSecondSemNonstemDataCT,
            'secondyearfirstsemnonstemCT' => $secondYearFirstSemNonstemDataCT,
            'secondyearsecondsemnonstemCT' => $secondYearSecondSemNonstemDataCT,
            'thirdyearfirstsemnonstemCT' => $thirdYearFirstSemNonstemDataCT,
            'thirdyearsecondsemnonstemCT' => $thirdYearSecondSemNonstemDataCT,
            'fourthyearfirstsemnonstemCT' => $fourthYearFirstSemNonstemDataCT,
            'fourthyearsecondsemnonstemCT' => $fourthYearSecondSemNonstemDataCT,

             //ET
             'firstyearfirstsemET' => $firstYearFirstSemDataET,
             'firstyearsecondsemET' => $firstYearSecondSemDataET,
             'secondyearfirstsemET' => $secondYearFirstSemDataET,
             'secondyearsecondsemET' => $secondYearSecondSemDataET,
             'thirdyearfirstsemET' => $thirdYearFirstSemDataET,
             'thirdyearsecondsemET' => $thirdYearSecondSemDataET,
             'fourthyearfirstsemET' => $fourthYearFirstSemDataET,
             'fourthyearsecondsemET' => $fourthYearSecondSemDataET,
             'firstyearfirstsemnonstemET' => $firstYearFirstSemNonstemDataET,
             'firstyearsecondsemnonstemET' => $firstYearSecondSemNonstemDataET,
             'secondyearfirstsemnonstemET' => $secondYearFirstSemNonstemDataET,
             'secondyearsecondsemnonstemET' => $secondYearSecondSemNonstemDataET,
             'thirdyearfirstsemnonstemET' => $thirdYearFirstSemNonstemDataET,
             'thirdyearsecondsemnonstemET' => $thirdYearSecondSemNonstemDataET,
             'fourthyearfirstsemnonstemET' => $fourthYearFirstSemNonstemDataET,
             'fourthyearsecondsemnonstemET' => $fourthYearSecondSemNonstemDataET,

              //ECT
              'firstyearfirstsemECT' => $firstYearFirstSemDataECT,
              'firstyearsecondsemECT' => $firstYearSecondSemDataECT,
              'secondyearfirstsemECT' => $secondYearFirstSemDataECT,
              'secondyearsecondsemECT' => $secondYearSecondSemDataECT,
              'thirdyearfirstsemECT' => $thirdYearFirstSemDataECT,
              'thirdyearsecondsemECT' => $thirdYearSecondSemDataECT,
              'fourthyearfirstsemECT' => $fourthYearFirstSemDataECT,
              'fourthyearsecondsemECT' => $fourthYearSecondSemDataECT,
              'firstyearfirstsemnonstemECT' => $firstYearFirstSemNonstemDataECT,
              'firstyearsecondsemnonstemECT' => $firstYearSecondSemNonstemDataECT,
              'secondyearfirstsemnonstemECT' => $secondYearFirstSemNonstemDataECT,
              'secondyearsecondsemnonstemECT' => $secondYearSecondSemNonstemDataECT,
              'thirdyearfirstsemnonstemECT' => $thirdYearFirstSemNonstemDataECT,
              'thirdyearsecondsemnonstemECT' => $thirdYearSecondSemNonstemDataECT,
              'fourthyearfirstsemnonstemECT' => $fourthYearFirstSemNonstemDataECT,
              'fourthyearsecondsemnonstemECT' => $fourthYearSecondSemNonstemDataECT,

              //ICT
              'firstyearfirstsemICT' => $firstYearFirstSemDataICT,
              'firstyearsecondsemICT' => $firstYearSecondSemDataICT,
              'secondyearfirstsemICT' => $secondYearFirstSemDataICT,
              'secondyearsecondsemICT' => $secondYearSecondSemDataICT,
              'thirdyearfirstsemICT' => $thirdYearFirstSemDataICT,
              'thirdyearsecondsemICT' => $thirdYearSecondSemDataICT,
              'fourthyearfirstsemICT' => $fourthYearFirstSemDataICT,
              'fourthyearsecondsemICT' => $fourthYearSecondSemDataICT,
              'firstyearfirstsemnonstemICT' => $firstYearFirstSemNonstemDataICT,
              'firstyearsecondsemnonstemICT' => $firstYearSecondSemNonstemDataICT,
              'secondyearfirstsemnonstemICT' => $secondYearFirstSemNonstemDataICT,
              'secondyearsecondsemnonstemICT' => $secondYearSecondSemNonstemDataICT,
              'thirdyearfirstsemnonstemICT' => $thirdYearFirstSemNonstemDataICT,
              'thirdyearsecondsemnonstemICT' => $thirdYearSecondSemNonstemDataICT,
              'fourthyearfirstsemnonstemICT' => $fourthYearFirstSemNonstemDataICT,
              'fourthyearsecondsemnonstemICT' => $fourthYearSecondSemNonstemDataICT,

            //MT
            'firstyearfirstsemMT' => $firstYearFirstSemDataMT,
            'firstyearsecondsemMT' => $firstYearSecondSemDataMT,
            'secondyearfirstsemMT' => $secondYearFirstSemDataMT,
            'secondyearsecondsemMT' => $secondYearSecondSemDataMT,
            'thirdyearfirstsemMT' => $thirdYearFirstSemDataMT,
            'thirdyearsecondsemMT' => $thirdYearSecondSemDataMT,
            'fourthyearfirstsemMT' => $fourthYearFirstSemDataMT,
            'fourthyearsecondsemMT' => $fourthYearSecondSemDataMT,
            'firstyearfirstsemnonstemMT' => $firstYearFirstSemNonstemDataMT,
            'firstyearsecondsemnonstemMT' => $firstYearSecondSemNonstemDataMT,
            'secondyearfirstsemnonstemMT' => $secondYearFirstSemNonstemDataMT,
            'secondyearsecondsemnonstemMT' => $secondYearSecondSemNonstemDataMT,
            'thirdyearfirstsemnonstemMT' => $thirdYearFirstSemNonstemDataMT,
            'thirdyearsecondsemnonstemMT' => $thirdYearSecondSemNonstemDataMT,
            'fourthyearfirstsemnonstemMT' => $fourthYearFirstSemNonstemDataMT,
            'fourthyearsecondsemnonstemMT' => $fourthYearSecondSemNonstemDataMT,

            //RT
            'firstyearfirstsemRT' => $firstYearFirstSemDataRT,
            'firstyearsecondsemRT' => $firstYearSecondSemDataRT,
            'secondyearfirstsemRT' => $secondYearFirstSemDataRT,
            'secondyearsecondsemRT' => $secondYearSecondSemDataRT,
            'thirdyearfirstsemRT' => $thirdYearFirstSemDataRT,
            'thirdyearsecondsemRT' => $thirdYearSecondSemDataRT,
            'fourthyearfirstsemRT' => $fourthYearFirstSemDataRT,
            'fourthyearsecondsemRT' => $fourthYearSecondSemDataRT,
            'firstyearfirstsemnonstemRT' => $firstYearFirstSemNonstemDataRT,
            'firstyearsecondsemnonstemRT' => $firstYearSecondSemNonstemDataRT,
            'secondyearfirstsemnonstemRT' => $secondYearFirstSemNonstemDataRT,
            'secondyearsecondsemnonstemRT' => $secondYearSecondSemNonstemDataRT,
            'thirdyearfirstsemnonstemRT' => $thirdYearFirstSemNonstemDataRT,
            'thirdyearsecondsemnonstemRT' => $thirdYearSecondSemNonstemDataRT,
            'fourthyearfirstsemnonstemRT' => $fourthYearFirstSemNonstemDataRT,
            'fourthyearsecondsemnonstemRT' => $fourthYearSecondSemNonstemDataRT,

             //AT
             'firstyearfirstsemAT' => $firstYearFirstSemDataAT,
             'firstyearsecondsemAT' => $firstYearSecondSemDataAT,
             'secondyearfirstsemAT' => $secondYearFirstSemDataAT,
             'secondyearsecondsemAT' => $secondYearSecondSemDataAT,
             'thirdyearfirstsemAT' => $thirdYearFirstSemDataAT,
             'thirdyearsecondsemAT' => $thirdYearSecondSemDataAT,
             'fourthyearfirstsemAT' => $fourthYearFirstSemDataAT,
             'fourthyearsecondsemAT' => $fourthYearSecondSemDataAT,
             'firstyearfirstsemnonstemAT' => $firstYearFirstSemNonstemDataAT,
             'firstyearsecondsemnonstemAT' => $firstYearSecondSemNonstemDataAT,
             'secondyearfirstsemnonstemAT' => $secondYearFirstSemNonstemDataAT,
             'secondyearsecondsemnonstemAT' => $secondYearSecondSemNonstemDataAT,
             'thirdyearfirstsemnonstemAT' => $thirdYearFirstSemNonstemDataAT,
             'thirdyearsecondsemnonstemAT' => $thirdYearSecondSemNonstemDataAT,
             'fourthyearfirstsemnonstemAT' => $fourthYearFirstSemNonstemDataAT,
             'fourthyearsecondsemnonstemAT' => $fourthYearSecondSemNonstemDataAT,

              //METFT
              'firstyearfirstsemMETFT' => $firstYearFirstSemDataMETFT,
              'firstyearsecondsemMETFT' => $firstYearSecondSemDataMETFT,
              'secondyearfirstsemMETFT' => $secondYearFirstSemDataMETFT,
              'secondyearsecondsemMETFT' => $secondYearSecondSemDataMETFT,
              'thirdyearfirstsemMETFT' => $thirdYearFirstSemDataMETFT,
              'thirdyearsecondsemMETFT' => $thirdYearSecondSemDataMETFT,
              'fourthyearfirstsemMETFT' => $fourthYearFirstSemDataMETFT,
              'fourthyearsecondsemMETFT' => $fourthYearSecondSemDataMETFT,
              'firstyearfirstsemnonstemMETFT' => $firstYearFirstSemNonstemDataMETFT,
              'firstyearsecondsemnonstemMETFT' => $firstYearSecondSemNonstemDataMETFT,
              'secondyearfirstsemnonstemMETFT' => $secondYearFirstSemNonstemDataMETFT,
              'secondyearsecondsemnonstemMETFT' => $secondYearSecondSemNonstemDataMETFT,
              'thirdyearfirstsemnonstemMETFT' => $thirdYearFirstSemNonstemDataMETFT,
              'thirdyearsecondsemnonstemMETFT' => $thirdYearSecondSemNonstemDataMETFT,
              'fourthyearfirstsemnonstemMETFT' => $fourthYearFirstSemNonstemDataMETFT,
              'fourthyearsecondsemnonstemMETFT' => $fourthYearSecondSemNonstemDataMETFT,

              //HV_RT
            'firstyearfirstsemHV_RT' => $firstYearFirstSemDataHV_RT,
            'firstyearsecondsemHV_RT' => $firstYearSecondSemDataHV_RT,
            'secondyearfirstsemHV_RT' => $secondYearFirstSemDataHV_RT,
            'secondyearsecondsemHV_RT' => $secondYearSecondSemDataHV_RT,
            'thirdyearfirstsemHV_RT' => $thirdYearFirstSemDataHV_RT,
            'thirdyearsecondsemHV_RT' => $thirdYearSecondSemDataHV_RT,
            'fourthyearfirstsemHV_RT' => $fourthYearFirstSemDataHV_RT,
            'fourthyearsecondsemHV_RT' => $fourthYearSecondSemDataHV_RT,
            'firstyearfirstsemnonstemHV_RT' => $firstYearFirstSemNonstemDataHV_RT,
            'firstyearsecondsemnonstemHV_RT' => $firstYearSecondSemNonstemDataHV_RT,
            'secondyearfirstsemnonstemHV_RT' => $secondYearFirstSemNonstemDataHV_RT,
            'secondyearsecondsemnonstemHV_RT' => $secondYearSecondSemNonstemDataHV_RT,
            'thirdyearfirstsemnonstemHV_RT' => $thirdYearFirstSemNonstemDataHV_RT,
            'thirdyearsecondsemnonstemHV_RT' => $thirdYearSecondSemNonstemDataHV_RT,
            'fourthyearfirstsemnonstemHV_RT' => $fourthYearFirstSemNonstemDataHV_RT,
            'fourthyearsecondsemnonstemHV_RT' => $fourthYearSecondSemNonstemDataHV_RT,


            //PPT
            'firstyearfirstsemPPT' => $firstYearFirstSemDataPPT,
            'firstyearsecondsemPPT' => $firstYearSecondSemDataPPT,
            'secondyearfirstsemPPT' => $secondYearFirstSemDataPPT,
            'secondyearsecondsemPPT' => $secondYearSecondSemDataPPT,
            'thirdyearfirstsemPPT' => $thirdYearFirstSemDataPPT,
            'thirdyearsecondsemPPT' => $thirdYearSecondSemDataPPT,
            'fourthyearfirstsemPPT' => $fourthYearFirstSemDataPPT,
            'fourthyearsecondsemPPT' => $fourthYearSecondSemDataPPT,
            'firstyearfirstsemnonstemPPT' => $firstYearFirstSemNonstemDataPPT,
            'firstyearsecondsemnonstemPPT' => $firstYearSecondSemNonstemDataPPT,
            'secondyearfirstsemnonstemPPT' => $secondYearFirstSemNonstemDataPPT,
            'secondyearsecondsemnonstemPPT' => $secondYearSecondSemNonstemDataPPT,
            'thirdyearfirstsemnonstemPPT' => $thirdYearFirstSemNonstemDataPPT,
            'thirdyearsecondsemnonstemPPT' => $thirdYearSecondSemNonstemDataPPT,
            'fourthyearfirstsemnonstemPPT' => $fourthYearFirstSemNonstemDataPPT,
            'fourthyearsecondsemnonstemPPT' => $fourthYearSecondSemNonstemDataPPT,

            //WT
            'firstyearfirstsemWT' => $firstYearFirstSemDataWT,
            'firstyearsecondsemWT' => $firstYearSecondSemDataWT,
            'secondyearfirstsemWT' => $secondYearFirstSemDataWT,
            'secondyearsecondsemWT' => $secondYearSecondSemDataWT,
            'thirdyearfirstsemWT' => $thirdYearFirstSemDataWT,
            'thirdyearsecondsemWT' => $thirdYearSecondSemDataWT,
            'fourthyearfirstsemWT' => $fourthYearFirstSemDataWT,
            'fourthyearsecondsemWT' => $fourthYearSecondSemDataWT,
            'firstyearfirstsemnonstemWT' => $firstYearFirstSemNonstemDataWT,
            'firstyearsecondsemnonstemWT' => $firstYearSecondSemNonstemDataWT,
            'secondyearfirstsemnonstemWT' => $secondYearFirstSemNonstemDataWT,
            'secondyearsecondsemnonstemWT' => $secondYearSecondSemNonstemDataWT,
            'thirdyearfirstsemnonstemWT' => $thirdYearFirstSemNonstemDataWT,
            'thirdyearsecondsemnonstemWT' => $thirdYearSecondSemNonstemDataWT,
            'fourthyearfirstsemnonstemWT' => $fourthYearFirstSemNonstemDataWT,
            'fourthyearsecondsemnonstemWT' => $fourthYearSecondSemNonstemDataWT,

             //DMT
             'firstyearfirstsemDMT' => $firstYearFirstSemDataDMT,
             'firstyearsecondsemDMT' => $firstYearSecondSemDataDMT,
             'secondyearfirstsemDMT' => $secondYearFirstSemDataDMT,
             'secondyearsecondsemDMT' => $secondYearSecondSemDataDMT,
             'thirdyearfirstsemDMT' => $thirdYearFirstSemDataDMT,
             'thirdyearsecondsemDMT' => $thirdYearSecondSemDataDMT,
             'fourthyearfirstsemDMT' => $fourthYearFirstSemDataDMT,
             'fourthyearsecondsemDMT' => $fourthYearSecondSemDataDMT,
             'firstyearfirstsemnonstemDMT' => $firstYearFirstSemNonstemDataDMT,
             'firstyearsecondsemnonstemDMT' => $firstYearSecondSemNonstemDataDMT,
             'secondyearfirstsemnonstemDMT' => $secondYearFirstSemNonstemDataDMT,
             'secondyearsecondsemnonstemDMT' => $secondYearSecondSemNonstemDataDMT,
             'thirdyearfirstsemnonstemDMT' => $thirdYearFirstSemNonstemDataDMT,
             'thirdyearsecondsemnonstemDMT' => $thirdYearSecondSemNonstemDataDMT,
             'fourthyearfirstsemnonstemDMT' => $fourthYearFirstSemNonstemDataDMT,
             'fourthyearsecondsemnonstemDMT' => $fourthYearSecondSemNonstemDataDMT,

              //AF
              'firstyearfirstsemAF' => $firstYearFirstSemDataAF,
              'firstyearsecondsemAF' => $firstYearSecondSemDataAF,
              'secondyearfirstsemAF' => $secondYearFirstSemDataAF,
              'secondyearsecondsemAF' => $secondYearSecondSemDataAF,
              'thirdyearfirstsemAF' => $thirdYearFirstSemDataAF,
              'thirdyearsecondsemAF' => $thirdYearSecondSemDataAF,
              'fourthyearfirstsemAF' => $fourthYearFirstSemDataAF,
              'fourthyearsecondsemAF' => $fourthYearSecondSemDataAF,
              'firstyearfirstsemnonstemAF' => $firstYearFirstSemNonstemDataAF,
              'firstyearsecondsemnonstemAF' => $firstYearSecondSemNonstemDataAF,
              'secondyearfirstsemnonstemAF' => $secondYearFirstSemNonstemDataAF,
              'secondyearsecondsemnonstemAF' => $secondYearSecondSemNonstemDataAF,
              'thirdyearfirstsemnonstemAF' => $thirdYearFirstSemNonstemDataAF,
              'thirdyearsecondsemnonstemAF' => $thirdYearSecondSemNonstemDataAF,
              'fourthyearfirstsemnonstemAF' => $fourthYearFirstSemNonstemDataAF,
              'fourthyearsecondsemnonstemAF' => $fourthYearSecondSemNonstemDataAF,

              //NFT
              'firstyearfirstsemNFT' => $firstYearFirstSemDataNFT,
              'firstyearsecondsemNFT' => $firstYearSecondSemDataNFT,
              'secondyearfirstsemNFT' => $secondYearFirstSemDataNFT,
              'secondyearsecondsemNFT' => $secondYearSecondSemDataNFT,
              'thirdyearfirstsemNFT' => $thirdYearFirstSemDataNFT,
              'thirdyearsecondsemNFT' => $thirdYearSecondSemDataNFT,
              'fourthyearfirstsemNFT' => $fourthYearFirstSemDataNFT,
              'fourthyearsecondsemNFT' => $fourthYearSecondSemDataNFT,
              'firstyearfirstsemnonstemNFT' => $firstYearFirstSemNonstemDataNFT,
              'firstyearsecondsemnonstemNFT' => $firstYearSecondSemNonstemDataNFT,
              'secondyearfirstsemnonstemNFT' => $secondYearFirstSemNonstemDataNFT,
              'secondyearsecondsemnonstemNFT' => $secondYearSecondSemNonstemDataNFT,
              'thirdyearfirstsemnonstemNFT' => $thirdYearFirstSemNonstemDataNFT,
              'thirdyearsecondsemnonstemNFT' => $thirdYearSecondSemNonstemDataNFT,
              'fourthyearfirstsemnonstemNFT' => $fourthYearFirstSemNonstemDataNFT,
              'fourthyearsecondsemnonstemNFT' => $fourthYearSecondSemNonstemDataNFT,

            //PMT
            'firstyearfirstsemPMT' => $firstYearFirstSemDataPMT,
            'firstyearsecondsemPMT' => $firstYearSecondSemDataPMT,
            'secondyearfirstsemPMT' => $secondYearFirstSemDataPMT,
            'secondyearsecondsemPMT' => $secondYearSecondSemDataPMT,
            'thirdyearfirstsemPMT' => $thirdYearFirstSemDataPMT,
            'thirdyearsecondsemPMT' => $thirdYearSecondSemDataPMT,
            'fourthyearfirstsemPMT' => $fourthYearFirstSemDataPMT,
            'fourthyearsecondsemPMT' => $fourthYearSecondSemDataPMT,
            'firstyearfirstsemnonstemPMT' => $firstYearFirstSemNonstemDataPMT,
            'firstyearsecondsemnonstemPMT' => $firstYearSecondSemNonstemDataPMT,
            'secondyearfirstsemnonstemPMT' => $secondYearFirstSemNonstemDataPMT,
            'secondyearsecondsemnonstemPMT' => $secondYearSecondSemNonstemDataPMT,
            'thirdyearfirstsemnonstemPMT' => $thirdYearFirstSemNonstemDataPMT,
            'thirdyearsecondsemnonstemPMT' => $thirdYearSecondSemNonstemDataPMT,
            'fourthyearfirstsemnonstemPMT' => $fourthYearFirstSemNonstemDataPMT,
            'fourthyearsecondsemnonstemPMT' => $fourthYearSecondSemNonstemDataPMT,



              
 
        ]);
    }

}
