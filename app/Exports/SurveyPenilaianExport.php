<?php

namespace App\Exports;

use App\Models\SurveyPenilaian;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Illuminate\Contracts\View\View;


class SurveyPenilaianExport implements FromView, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    // public function collection()
    // {
    //     return SurveyPenilaian::join('users', 'users.id', '=', 'surveypenilaians.user_id')->join('kelolapenilaians', 'kelolapenilaians.id', '=', 'surveypenilaians.kelola_penilaian_id')
    //         ->where('surveypenilaians.user_id', auth()->user()->id)->get();
    // }

    public function view(): View
    {
        $data = SurveyPenilaian::join('users', 'users.id', '=', 'surveypenilaians.user_id')->join('kelolapenilaians', 'kelolapenilaians.id', '=', 'surveypenilaians.kelola_penilaian_id')->get();
        return view('page.staff.survey.pdf', compact('data'));
    }
    public function headings(): array
    {
        return ["No", "Nama Pertanyaan", "Kategori Pertanyaan", "Rubik", "Skor"];
    }
}
