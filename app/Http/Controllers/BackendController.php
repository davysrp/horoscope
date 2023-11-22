<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class BackendController extends Controller
{
    //


    public function index(Request $request)
    {
        $day = [
            1 => [
                'name' => 'អាទិត្យ',
                'key' => 1,
                'year' => '6',
                'animal' => 'គ្រុឌ',
                'dt' => 'ឱពុក',
                'dt2' => 'យសតំណែង',
                'letter' => 'ក,ខ,គ,ឃ,ង',
                'element' => 'ភ្លើង(-)'
            ],
            2 => [
                'name' => 'ចន្ទ',
                'key' => 2,
                'year' => '15',
                'animal' => 'សត្វខ្លា',
                'dt' => 'ម្តាយ',
                'dt2' => 'រូបចរិត',
                'letter' => 'ក,ខ,គ,ឃ,ង',
                'element' => 'ដី(+)'
            ],
            3 => [
                'name' => 'អង្គារ',
                'key' => 3,
                'year' => '8',
                'animal' => 'សត្វសីហៈ',
                'dt' => 'ស្វាមី',
                'dt2' => 'សេចក្តីព្យាយាម',
                'letter' => 'ច,ឆ,ជ,ឈ,ញ',
                'element' => 'ខ្យល់(-)'
            ],
            4 => [
                'name' => 'ពុធ',
                'key' => 4,
                'year' => '17',
                'animal' => 'សត្វឆ្កែ',
                'dt' => 'បុត្រ ធីតា',
                'dt2' => 'វាចាទន់ភ្លន់',
                'letter' => 'ដ,ឋ,ឌ,ឍ,ណ',
                'element' => 'ទឹក(+)'
            ],
            5 => [
                'name' => 'សៅរ៍',
                'key' => 7,
                'year' => '10',
                'animal' => 'សត្វនាគ',
                'dt' => 'បងប្អូន',
                'dt2' => 'សេចក្តីទុក្ខ',
                'letter' => 'ត,ថ,ទ,ធ,ន',
                'element' => 'ភ្លើង(+)'
            ],
            6 => [
                'name' => 'ព្រហស្បតិ៍',
                'key' => 5,
                'year' => '19',
                'animal' => 'សត្វកណ្តុរ',
                'dt' => 'បញ្ញា',
                'dt2' => 'បញ្ញាបរិសុទ្ធ',
                'letter' => 'ប,ផ,ព,ភ,ម',
                'element' => 'ដី(+)'
            ],
            7 => [
                'name' => 'រាហ៊ូ',
                'key' => 8,
                'year' => '12',
                'animal' => 'សត្វដំរី',
                'dt' => 'បុត្រ ធីតា',
                'dt2' => 'ហ្មងសៅ',
                'letter' => 'យ,រ,ល,វ',
                'element' => 'ខ្យល់(-)'
            ],
            8 => [
                'name' => 'សុក្រ',
                'key' => 6,
                'year' => '21',
                'animal' => 'សត្វពពេ',
                'dt' => 'បុត្រ ធីតា'
                , 'dt2' => 'ទ្រព្យសម្បត្តិកិលេស',
                'letter' => 'ស,ហ,ឡ',
                'element' => 'ទឹក(+)'
            ],
            9 => [
                'name' => 'កេតុ',
                'key' => 9,
                'year' => '',
                'animal' => 'កេតុ',
                'dt' => 'រឿងអាភេទ',
                'dt2' => 'រឿងអាភេទ',
                'letter' => 'ក,ខ,គ,ឃ,ង'
            ],
            10 => [
                'name' => 'ម្រឺត្យូវ',
                'key' => 6,
                'year' => '',
                'animal' => 'ម្រឺត្យូវ',
                'dt' => 'ឃ្លាតឆ្ងាយ',
                'dt2' => 'ឃ្លាតឆ្ងាយ',
                'letter' => 'ក,ខ,គ,ឃ,ង'
            ]
        ];
        $teaksa = [
            1 => 'បរិវា',
            2 => 'អាយុ',
            3 => 'តេជៈ',
            4 => 'សិរី',
            5 => 'មូលៈ',
            6 => 'ឩស្សាហៈ',
            7 => 'មន្រ្តី',
            8 => 'កាឡកិណី',
        ];
        $kalyok = [
            1 => 'ភង្គៈ',
            2 => 'បូតិ',
            3 => 'រណ្តៅទ្រព្យ',
            4 => 'មរណៈ',
            5 => 'អធិបតី',
            6 => 'រាជា',
            7 => 'ទង់ជ័យ',
        ];
        $kalyokNumber = [
            1 => 'ដួងអ្នកកំព្រា',
            2 => 'ដួងអ្នកភាសា',
            3 => 'ដួងអ្នកគ្រប់គ្រង',
            4 => 'ដួងអ្នកសុខសាន្ត',
            5 => 'ដួងអ្នកសេដ្ឋី',
            6 => 'ដួងអ្នកវិជ្ជាការ',
            7 => 'ដួងមហាសេដ្ឋី',
            0 => 'ដួងមហាសេដ្ឋី',
        ];

        $direction = [
            1 => 'ឦសាន(ជើងឆៀងកើត)',
            2 => 'បូព៌(កើត)',
            3 => 'អាគ្នេយ៍(កើតឆៀងត្បូង)',
            4 => 'ទក្សិណ(ត្បូង)',
            5 => 'និរតី(ត្បូងឆៀងលិច)',
            6 => 'បស្ចឹម(លិច)',
            7 => 'ពាយ័ព្យ(លិចឆៀងជើង)',
            8 => 'ឧត្តរ(ជើង)',
        ];

        $engName = [
            'Sunday' => 1,
            'Monday' => 2,
            'Tuesday' => 3,
            'Wednesday' => 4,
            'Thursday' => 5,
            'Friday' => 6,
            'Saturday' => 7,
        ];

        $kalyokArr = null;
        $teaksaArr = null;

//        $bornNumber1 = (1993 - 638) % 7;
        $bornDate = '1993-12-19';
        $year = Carbon::parse($bornDate)->format('Y');
        $bornNumber = ($year - 638) % 7;

        $dayName = Carbon::parse($bornDate)->format('l');
        $dayNumber = 2;

        if ($bornNumber == 1) $kalyokArr = [1, 2, 3, 4, 7, 5, 4, 6];
        if ($bornNumber == 2) $kalyokArr = [7,1,2,3,6,4,3,5];
        if ($bornNumber == 3) $kalyokArr = [6,7,1,2,5,3,2,4];
        if ($bornNumber == 4) $kalyokArr = [5,6,7,1,4,2,1,3];
        if ($bornNumber == 5) $kalyokArr = [4,5,6,7,3,1,7,2];
        if ($bornNumber == 6) $kalyokArr = [3,4,5,6,2,7,6,1];
        if ($bornNumber == 7 | $bornNumber == 0) $kalyokArr = [2,3,4,5,1,6,5,7];

        if ($dayNumber == 1) $teaksaStartNumber = [1, 2, 3, 4, 5, 6, 7, 8];
        if ($dayNumber == 2) $teaksaStartNumber = [8, 1, 2, 3, 4, 5, 6, 7];
        if ($dayNumber == 3) $teaksaStartNumber = [7, 8, 1, 2, 3, 4, 5, 6];
        if ($dayNumber == 4) $teaksaStartNumber = [6, 7, 8, 1, 2, 3, 4, 5];
        if ($dayNumber == 5) $teaksaStartNumber = [5, 6, 7, 8, 1, 2, 3, 4];
        if ($dayNumber == 6) $teaksaStartNumber = [4, 5, 6, 7, 8, 1, 2, 3];
        if ($dayNumber == 7) $teaksaStartNumber = [3, 4, 5, 6, 7, 8, 1, 2];
        if ($dayNumber == 8) $teaksaStartNumber = [2, 3, 4, 5, 6, 7, 8, 1];

        $responseData = [];
        $i = 0;
        foreach ($day as $key => $item) {
            if ($key <= 8) {
                $responseData[] = [
                    'direction' => $direction[$key],
                    'key' => $item['key'],
                    'day' => $item['name'],
                    'element' => $item['element'],
                    'dt' => $item['dt'],
                    'dt2' => $item['dt2'],
                    'animal' => $item['animal'],
                    'letter' => $item['letter'],
                    'year' => $item['year'] . ' Years',
                    'kalyok' => $kalyok[$kalyokArr[$i]] ?? null,
                    'taksa' => $teaksa[$teaksaStartNumber[$i]],



                ];

                $i++;
            }
        }


        return response()->json([
            'dd' => $kalyokArr,
            'duong' => '[' . $bornNumber . ']' . $kalyokNumber[$bornNumber] ?? null,
            'data' => $responseData
        ]);

    }
}
