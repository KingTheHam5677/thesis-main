<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CS\FirstYearFirstSemester;
use App\Models\CS\FirstYearSecondSemester;
use App\Models\CS\SecondYearFirstSemester;
use App\Models\CS\SecondYearSecondSemester;
use App\Models\CS\ThirdYearFirstSemester;
use App\Models\CS\ThirdYearSecondSemester;
use App\Models\CS\FourthYearFirstSemester;
use App\Models\CS\FourthYearSecondSemester;
use App\Models\CS\NonStemFirstYearFirstSemester;
use App\Models\CS\NonStemFirstYearSecondSemester;
use App\Models\CS\NonStemSecondYearFirstSemester;
use App\Models\CS\NonStemSecondYearSecondSemester;
use App\Models\CS\NonStemThirdYearFirstSemester;
use App\Models\CS\NonStemThirdYearSecondSemester;
use App\Models\CS\NonStemFourthYearFirstSemester;
use App\Models\CS\NonStemFourthYearSecondSemester;
use App\Models\IS\FirstYearFirstSemesterIS;
use App\Models\IS\FirstYearSecondSemesterIS;
use App\Models\IS\SecondYearFirstSemesterIS;
use App\Models\IS\SecondYearSecondSemesterIS;
use App\Models\IS\ThirdYearFirstSemesterIS;
use App\Models\IS\ThirdYearSecondSemesterIS;
use App\Models\IS\FourthYearFirstSemesterIS;
use App\Models\IS\FourthYearSecondSemesterIS;
use App\Models\IS\NonStemFirstYearFirstSemesterIS;
use App\Models\IS\NonStemFirstYearSecondSemesterIS;
use App\Models\IS\NonStemSecondYearFirstSemesterIS;
use App\Models\IS\NonStemSecondYearSecondSemesterIS;
use App\Models\IS\NonStemThirdYearFirstSemesterIS;
use App\Models\IS\NonStemThirdYearSecondSemesterIS;
use App\Models\IS\NonStemFourthYearFirstSemesterIS;
use App\Models\IS\NonStemFourthYearSecondSemesterIS;
use App\Models\IT\FirstYearFirstSemesterIT;
use App\Models\IT\FirstYearSecondSemesterIT;
use App\Models\IT\SecondYearFirstSemesterIT;
use App\Models\IT\SecondYearSecondSemesterIT;
use App\Models\IT\ThirdYearFirstSemesterIT;
use App\Models\IT\ThirdYearSecondSemesterIT;
use App\Models\IT\FourthYearFirstSemesterIT;
use App\Models\IT\FourthYearSecondSemesterIT;
use App\Models\IT\NonStemFirstYearFirstSemesterIT;
use App\Models\IT\NonStemFirstYearSecondSemesterIT;
use App\Models\IT\NonStemSecondYearFirstSemesterIT;
use App\Models\IT\NonStemSecondYearSecondSemesterIT;
use App\Models\IT\NonStemThirdYearFirstSemesterIT;
use App\Models\IT\NonStemThirdYearSecondSemesterIT;
use App\Models\IT\NonStemFourthYearFirstSemesterIT;
use App\Models\IT\NonStemFourthYearSecondSemesterIT;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Truncate tables before seeding new data
        //CS
        FirstYearFirstSemester::truncate();
        FirstYearSecondSemester::truncate();
        SecondYearFirstSemester::truncate();
        SecondYearSecondSemester::truncate();
        ThirdYearFirstSemester::truncate();
        ThirdYearSecondSemester::truncate();
        FourthYearFirstSemester::truncate();
        FourthYearSecondSemester::truncate();
        NonStemFirstYearFirstSemester::truncate();
        NonStemFirstYearSecondSemester::truncate();
        NonStemSecondYearFirstSemester::truncate();
        NonStemSecondYearSecondSemester::truncate();
        NonStemThirdYearFirstSemester::truncate();
        NonStemThirdYearSecondSemester::truncate();
        NonStemFourthYearFirstSemester::truncate();
        NonStemFourthYearSecondSemester::truncate();

        //IS
        FirstYearFirstSemesterIS::truncate();
        FirstYearSecondSemesterIS::truncate();
        SecondYearFirstSemesterIS::truncate();
        SecondYearSecondSemesterIS::truncate();
        ThirdYearFirstSemesterIS::truncate();
        ThirdYearSecondSemesterIS::truncate();
        FourthYearFirstSemesterIS::truncate();
        FourthYearSecondSemesterIS::truncate();
        NonStemFirstYearFirstSemesterIS::truncate();
        NonStemFirstYearSecondSemesterIS::truncate();
        NonStemSecondYearFirstSemesterIS::truncate();
        NonStemSecondYearSecondSemesterIS::truncate();
        NonStemThirdYearFirstSemesterIS::truncate();
        NonStemThirdYearSecondSemesterIS::truncate();
        NonStemFourthYearFirstSemesterIS::truncate();
        NonStemFourthYearSecondSemesterIS::truncate();

        //IT
        FirstYearFirstSemesterIT::truncate();
        FirstYearSecondSemesterIT::truncate();
        SecondYearFirstSemesterIT::truncate();
        SecondYearSecondSemesterIT::truncate();
        ThirdYearFirstSemesterIT::truncate();
        ThirdYearSecondSemesterIT::truncate();
        FourthYearFirstSemesterIT::truncate();
        FourthYearSecondSemesterIT::truncate();
        NonStemFirstYearFirstSemesterIT::truncate();
        NonStemFirstYearSecondSemesterIT::truncate();
        NonStemSecondYearFirstSemesterIT::truncate();
        NonStemSecondYearSecondSemesterIT::truncate();
        NonStemThirdYearFirstSemesterIT::truncate();
        NonStemThirdYearSecondSemesterIT::truncate();
        NonStemFourthYearFirstSemesterIT::truncate();
        NonStemFourthYearSecondSemesterIT::truncate();



        /* Seed each table with a specified number of records
        $this->seedRecords(FirstYearFirstSemester::class, 5);
        $this->seedRecords(FirstYearSecondSemester::class, 5);
        $this->seedRecords(SecondYearFirstSemester::class, 5);
        $this->seedRecords(SecondYearSecondSemester::class, 5);
        $this->seedRecords(ThirdYearFirstSemester::class, 5);
        $this->seedRecords(ThirdYearSecondSemester::class, 5);
        $this->seedRecords(FourthYearFirstSemester::class, 5);
        $this->seedRecords(FourthYearSecondSemester::class, 5);*/
    }

    /**
     * Seed a specified number of records for a given model.
     *
     * @param string $model
     * @param int $count
     * @return void
     */
    private function seedRecords(string $model, int $count): void
    {
        $model::factory($count)->create();
    }
}
