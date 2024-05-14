<?php

namespace App\Http\Controllers\COS;

use App\Http\Controllers\Controller;
use App\Models\COS\CS\FirstYearFirstSemester;
use App\Models\COS\CS\FirstYearSecondSemester;
use App\Models\COS\CS\SecondYearFirstSemester;
use App\Models\COS\CS\SecondYearSecondSemester;
use App\Models\COS\CS\ThirdYearFirstSemester;
use App\Models\COS\CS\ThirdYearSecondSemester;
use App\Models\COS\CS\FourthYearFirstSemester;
use App\Models\COS\CS\FourthYearSecondSemester;
use App\Models\COS\CS\NonStemFirstYearFirstSemester;
use App\Models\COS\CS\NonStemFirstYearSecondSemester;
use App\Models\COS\CS\NonStemSecondYearFirstSemester;
use App\Models\COS\CS\NonStemSecondYearSecondSemester;
use App\Models\COS\CS\NonStemThirdYearFirstSemester;
use App\Models\COS\CS\NonStemThirdYearSecondSemester;
use App\Models\COS\CS\NonStemFourthYearFirstSemester;
use App\Models\COS\CS\NonStemFourthYearSecondSemester;
use App\Models\COS\IS\FirstYearFirstSemesterIS;
use App\Models\COS\IS\FirstYearSecondSemesterIS;
use App\Models\COS\IS\SecondYearFirstSemesterIS;
use App\Models\COS\IS\SecondYearSecondSemesterIS;
use App\Models\COS\IS\ThirdYearFirstSemesterIS;
use App\Models\COS\IS\ThirdYearSecondSemesterIS;
use App\Models\COS\IS\FourthYearFirstSemesterIS;
use App\Models\COS\IS\FourthYearSecondSemesterIS;
use App\Models\COS\IS\NonStemFirstYearFirstSemesterIS;
use App\Models\COS\IS\NonStemFirstYearSecondSemesterIS;
use App\Models\COS\IS\NonStemSecondYearFirstSemesterIS;
use App\Models\COS\IS\NonStemSecondYearSecondSemesterIS;
use App\Models\COS\IS\NonStemThirdYearFirstSemesterIS;
use App\Models\COS\IS\NonStemThirdYearSecondSemesterIS;
use App\Models\COS\IS\NonStemFourthYearFirstSemesterIS;
use App\Models\COS\IS\NonStemFourthYearSecondSemesterIS;
use App\Models\COS\IT\FirstYearFirstSemesterIT;
use App\Models\COS\IT\FirstYearSecondSemesterIT;
use App\Models\COS\IT\SecondYearFirstSemesterIT;
use App\Models\COS\IT\SecondYearSecondSemesterIT;
use App\Models\COS\IT\ThirdYearFirstSemesterIT;
use App\Models\COS\IT\ThirdYearSecondSemesterIT;
use App\Models\COS\IT\FourthYearFirstSemesterIT;
use App\Models\COS\IT\FourthYearSecondSemesterIT;
use App\Models\COS\IT\NonStemFirstYearFirstSemesterIT;
use App\Models\COS\IT\NonStemFirstYearSecondSemesterIT;
use App\Models\COS\IT\NonStemSecondYearFirstSemesterIT;
use App\Models\COS\IT\NonStemSecondYearSecondSemesterIT;
use App\Models\COS\IT\NonStemThirdYearFirstSemesterIT;
use App\Models\COS\IT\NonStemThirdYearSecondSemesterIT;
use App\Models\COS\IT\NonStemFourthYearFirstSemesterIT;
use App\Models\COS\IT\NonStemFourthYearSecondSemesterIT;
use App\Models\COS\ES\FirstYearFirstSemesterES;
use App\Models\COS\ES\FirstYearSecondSemesterES;
use App\Models\COS\ES\SecondYearFirstSemesterES;
use App\Models\COS\ES\SecondYearSecondSemesterES;
use App\Models\COS\ES\ThirdYearFirstSemesterES;
use App\Models\COS\ES\ThirdYearSecondSemesterES;
use App\Models\COS\ES\FourthYearFirstSemesterES;
use App\Models\COS\ES\FourthYearSecondSemesterES;
use App\Models\COS\ES\NonStemFirstYearFirstSemesterES;
use App\Models\COS\ES\NonStemFirstYearSecondSemesterES;
use App\Models\COS\ES\NonStemSecondYearFirstSemesterES;
use App\Models\COS\ES\NonStemSecondYearSecondSemesterES;
use App\Models\COS\ES\NonStemThirdYearFirstSemesterES;
use App\Models\COS\ES\NonStemThirdYearSecondSemesterES;
use App\Models\COS\ES\NonStemFourthYearFirstSemesterES;
use App\Models\COS\ES\NonStemFourthYearSecondSemesterES;
use App\Models\COS\LT\FirstYearFirstSemesterLT;
use App\Models\COS\LT\FirstYearSecondSemesterLT;
use App\Models\COS\LT\SecondYearFirstSemesterLT;
use App\Models\COS\LT\SecondYearSecondSemesterLT;
use App\Models\COS\LT\ThirdYearFirstSemesterLT;
use App\Models\COS\LT\ThirdYearSecondSemesterLT;
use App\Models\COS\LT\FourthYearFirstSemesterLT;
use App\Models\COS\LT\FourthYearSecondSemesterLT;
use App\Models\COS\LT\NonStemFirstYearFirstSemesterLT;
use App\Models\COS\LT\NonStemFirstYearSecondSemesterLT;
use App\Models\COS\LT\NonStemSecondYearFirstSemesterLT;
use App\Models\COS\LT\NonStemSecondYearSecondSemesterLT;
use App\Models\COS\LT\NonStemThirdYearFirstSemesterLT;
use App\Models\COS\LT\NonStemThirdYearSecondSemesterLT;
use App\Models\COS\LT\NonStemFourthYearFirstSemesterLT;
use App\Models\COS\LT\NonStemFourthYearSecondSemesterLT;

use Inertia\Inertia;

class CurriculumController extends Controller
{
    public function index()
    {
        //CS
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

        //IS
        $firstYearFirstSemDataIS = FirstYearFirstSemesterIS::all();
        $firstYearSecondSemDataIS = FirstYearSecondSemesterIS::all();
        $secondYearFirstSemDataIS = SecondYearFirstSemesterIS::all();
        $secondYearSecondSemDataIS = SecondYearSecondSemesterIS::all();
        $thirdYearFirstSemDataIS = ThirdYearFirstSemesterIS::all();
        $thirdYearSecondSemDataIS = ThirdYearSecondSemesterIS::all();
        $fourthYearFirstSemDataIS = FourthYearFirstSemesterIS::all();
        $fourthYearSecondSemDataIS = FourthYearSecondSemesterIS::all();
        $firstYearFirstSemNonstemDataIS = NonStemFirstYearFirstSemesterIS::all();
        $firstYearSecondSemNonstemDataIS = NonStemFirstYearSecondSemesterIS::all();
        $secondYearFirstSemNonstemDataIS = NonStemSecondYearFirstSemesterIS::all();
        $secondYearSecondSemNonstemDataIS = NonStemSecondYearSecondSemesterIS::all();
        $thirdYearFirstSemNonstemDataIS = NonStemThirdYearFirstSemesterIS::all();
        $thirdYearSecondSemNonstemDataIS = NonStemThirdYearSecondSemesterIS::all();
        $fourthYearFirstSemNonstemDataIS = NonStemFourthYearFirstSemesterIS::all();
        $fourthYearSecondSemNonstemDataIS = NonStemFourthYearSecondSemesterIS::all();

        //IT
        $firstYearFirstSemDataIT = FirstYearFirstSemesterIT::all();
        $firstYearSecondSemDataIT = FirstYearSecondSemesterIT::all();
        $secondYearFirstSemDataIT = SecondYearFirstSemesterIT::all();
        $secondYearSecondSemDataIT = SecondYearSecondSemesterIT::all();
        $thirdYearFirstSemDataIT = ThirdYearFirstSemesterIT::all();
        $thirdYearSecondSemDataIT = ThirdYearSecondSemesterIT::all();
        $fourthYearFirstSemDataIT = FourthYearFirstSemesterIT::all();
        $fourthYearSecondSemDataIT = FourthYearSecondSemesterIT::all();
        $firstYearFirstSemNonstemDataIT = NonStemFirstYearFirstSemesterIT::all();
        $firstYearSecondSemNonstemDataIT = NonStemFirstYearSecondSemesterIT::all();
        $secondYearFirstSemNonstemDataIT = NonStemSecondYearFirstSemesterIT::all();
        $secondYearSecondSemNonstemDataIT = NonStemSecondYearSecondSemesterIT::all();
        $thirdYearFirstSemNonstemDataIT = NonStemThirdYearFirstSemesterIT::all();
        $thirdYearSecondSemNonstemDataIT = NonStemThirdYearSecondSemesterIT::all();
        $fourthYearFirstSemNonstemDataIT = NonStemFourthYearFirstSemesterIT::all();
        $fourthYearSecondSemNonstemDataIT = NonStemFourthYearSecondSemesterIT::all();

         //ES
         $firstYearFirstSemDataES = FirstYearFirstSemesterES::all();
         $firstYearSecondSemDataES = FirstYearSecondSemesterES::all();
         $secondYearFirstSemDataES = SecondYearFirstSemesterES::all();
         $secondYearSecondSemDataES = SecondYearSecondSemesterES::all();
         $thirdYearFirstSemDataES = ThirdYearFirstSemesterES::all();
         $thirdYearSecondSemDataES = ThirdYearSecondSemesterES::all();
         $fourthYearFirstSemDataES = FourthYearFirstSemesterES::all();
         $fourthYearSecondSemDataES = FourthYearSecondSemesterES::all();
         $firstYearFirstSemNonstemDataES = NonStemFirstYearFirstSemesterES::all();
         $firstYearSecondSemNonstemDataES = NonStemFirstYearSecondSemesterES::all();
         $secondYearFirstSemNonstemDataES = NonStemSecondYearFirstSemesterES::all();
         $secondYearSecondSemNonstemDataES = NonStemSecondYearSecondSemesterES::all();
         $thirdYearFirstSemNonstemDataES = NonStemThirdYearFirstSemesterES::all();
         $thirdYearSecondSemNonstemDataES = NonStemThirdYearSecondSemesterES::all();
         $fourthYearFirstSemNonstemDataES = NonStemFourthYearFirstSemesterES::all();
         $fourthYearSecondSemNonstemDataES = NonStemFourthYearSecondSemesterES::all();

         //LT
        $firstYearFirstSemDataLT = FirstYearFirstSemesterLT::all();
        $firstYearSecondSemDataLT = FirstYearSecondSemesterLT::all();
        $secondYearFirstSemDataLT = SecondYearFirstSemesterLT::all();
        $secondYearSecondSemDataLT = SecondYearSecondSemesterLT::all();
        $thirdYearFirstSemDataLT = ThirdYearFirstSemesterLT::all();
        $thirdYearSecondSemDataLT = ThirdYearSecondSemesterLT::all();
        $fourthYearFirstSemDataLT = FourthYearFirstSemesterLT::all();
        $fourthYearSecondSemDataLT = FourthYearSecondSemesterLT::all();
        $firstYearFirstSemNonstemDataLT = NonStemFirstYearFirstSemesterLT::all();
        $firstYearSecondSemNonstemDataLT = NonStemFirstYearSecondSemesterLT::all();
        $secondYearFirstSemNonstemDataLT = NonStemSecondYearFirstSemesterLT::all();
        $secondYearSecondSemNonstemDataLT = NonStemSecondYearSecondSemesterLT::all();
        $thirdYearFirstSemNonstemDataLT = NonStemThirdYearFirstSemesterLT::all();
        $thirdYearSecondSemNonstemDataLT = NonStemThirdYearSecondSemesterLT::all();
        $fourthYearFirstSemNonstemDataLT = NonStemFourthYearFirstSemesterLT::all();
        $fourthYearSecondSemNonstemDataLT = NonStemFourthYearSecondSemesterLT::all();


        // Return Inertia response with all semester data
        return Inertia::render('Curriculum', [

            //CS
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

            //IS
            'firstyearfirstsemIS' => $firstYearFirstSemDataIS,
            'firstyearsecondsemIS' => $firstYearSecondSemDataIS,
            'secondyearfirstsemIS' => $secondYearFirstSemDataIS,
            'secondyearsecondsemIS' => $secondYearSecondSemDataIS,
            'thirdyearfirstsemIS' => $thirdYearFirstSemDataIS,
            'thirdyearsecondsemIS' => $thirdYearSecondSemDataIS,
            'fourthyearfirstsemIS' => $fourthYearFirstSemDataIS,
            'fourthyearsecondsemIS' => $fourthYearSecondSemDataIS,
            'firstyearfirstsemnonstemIS' => $firstYearFirstSemNonstemDataIS,
            'firstyearsecondsemnonstemIS' => $firstYearSecondSemNonstemDataIS,
            'secondyearfirstsemnonstemIS' => $secondYearFirstSemNonstemDataIS,
            'secondyearsecondsemnonstemIS' => $secondYearSecondSemNonstemDataIS,
            'thirdyearfirstsemnonstemIS' => $thirdYearFirstSemNonstemDataIS,
            'thirdyearsecondsemnonstemIS' => $thirdYearSecondSemNonstemDataIS,
            'fourthyearfirstsemnonstemIS' => $fourthYearFirstSemNonstemDataIS,
            'fourthyearsecondsemnonstemIS' => $fourthYearSecondSemNonstemDataIS,

            //IT
            'firstyearfirstsemIT' => $firstYearFirstSemDataIT,
            'firstyearsecondsemIT' => $firstYearSecondSemDataIT,
            'secondyearfirstsemIT' => $secondYearFirstSemDataIT,
            'secondyearsecondsemIT' => $secondYearSecondSemDataIT,
            'thirdyearfirstsemIT' => $thirdYearFirstSemDataIT,
            'thirdyearsecondsemIT' => $thirdYearSecondSemDataIT,
            'fourthyearfirstsemIT' => $fourthYearFirstSemDataIT,
            'fourthyearsecondsemIT' => $fourthYearSecondSemDataIT,
            'firstyearfirstsemnonstemIT' => $firstYearFirstSemNonstemDataIT,
            'firstyearsecondsemnonstemIT' => $firstYearSecondSemNonstemDataIT,
            'secondyearfirstsemnonstemIT' => $secondYearFirstSemNonstemDataIT,
            'secondyearsecondsemnonstemIT' => $secondYearSecondSemNonstemDataIT,
            'thirdyearfirstsemnonstemIT' => $thirdYearFirstSemNonstemDataIT,
            'thirdyearsecondsemnonstemIT' => $thirdYearSecondSemNonstemDataIT,
            'fourthyearfirstsemnonstemIT' => $fourthYearFirstSemNonstemDataIT,
            'fourthyearsecondsemnonstemIT' => $fourthYearSecondSemNonstemDataIT,

             //ES
             'firstyearfirstsemES' => $firstYearFirstSemDataES,
             'firstyearsecondsemES' => $firstYearSecondSemDataES,
             'secondyearfirstsemES' => $secondYearFirstSemDataES,
             'secondyearsecondsemES' => $secondYearSecondSemDataES,
             'thirdyearfirstsemES' => $thirdYearFirstSemDataES,
             'thirdyearsecondsemES' => $thirdYearSecondSemDataES,
             'fourthyearfirstsemES' => $fourthYearFirstSemDataES,
             'fourthyearsecondsemES' => $fourthYearSecondSemDataES,
             'firstyearfirstsemnonstemES' => $firstYearFirstSemNonstemDataES,
             'firstyearsecondsemnonstemES' => $firstYearSecondSemNonstemDataES,
             'secondyearfirstsemnonstemES' => $secondYearFirstSemNonstemDataES,
             'secondyearsecondsemnonstemES' => $secondYearSecondSemNonstemDataES,
             'thirdyearfirstsemnonstemES' => $thirdYearFirstSemNonstemDataES,
             'thirdyearsecondsemnonstemES' => $thirdYearSecondSemNonstemDataES,
             'fourthyearfirstsemnonstemES' => $fourthYearFirstSemNonstemDataES,
             'fourthyearsecondsemnonstemES' => $fourthYearSecondSemNonstemDataES,

              //LT
              'firstyearfirstsemLT' => $firstYearFirstSemDataLT,
              'firstyearsecondsemLT' => $firstYearSecondSemDataLT,
              'secondyearfirstsemLT' => $secondYearFirstSemDataLT,
              'secondyearsecondsemLT' => $secondYearSecondSemDataLT,
              'thirdyearfirstsemLT' => $thirdYearFirstSemDataLT,
              'thirdyearsecondsemLT' => $thirdYearSecondSemDataLT,
              'fourthyearfirstsemLT' => $fourthYearFirstSemDataLT,
              'fourthyearsecondsemLT' => $fourthYearSecondSemDataLT,
              'firstyearfirstsemnonstemLT' => $firstYearFirstSemNonstemDataLT,
              'firstyearsecondsemnonstemLT' => $firstYearSecondSemNonstemDataLT,
              'secondyearfirstsemnonstemLT' => $secondYearFirstSemNonstemDataLT,
              'secondyearsecondsemnonstemLT' => $secondYearSecondSemNonstemDataLT,
              'thirdyearfirstsemnonstemLT' => $thirdYearFirstSemNonstemDataLT,
              'thirdyearsecondsemnonstemLT' => $thirdYearSecondSemNonstemDataLT,
              'fourthyearfirstsemnonstemLT' => $fourthYearFirstSemNonstemDataLT,
              'fourthyearsecondsemnonstemLT' => $fourthYearSecondSemNonstemDataLT,
  
 
        ]);
    }

}
