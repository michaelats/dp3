<?php

namespace App\Http\Controllers\Admin;

use App\Exports\SurveyPenilaianExport;
use App\Http\Controllers\Controller;
use App\Models\kelolaPenilaian;
use App\Models\Penilaian;
use App\Models\SurveyPenilaian;
use App\Models\User as AssignPenilai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Facades\Excel;

class SurveyController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $keywords = $request->keywords;
            $collection = SurveyPenilaian::join('users', 'users.id', '=', 'surveypenilaians.user_id')->join('kelolapenilaians', 'kelolapenilaians.id', '=', 'surveypenilaians.kelola_penilaian_id')
                ->where('users.name', 'like', '%' . $keywords . '%')->paginate(10);
            return view('page.admin.survey.list', compact('collection'));
        }
        $surveyPenilaian = SurveyPenilaian::join('users', 'users.id', '=', 'surveypenilaians.user_id')->join('kelolapenilaians', 'kelolapenilaians.id', '=', 'surveypenilaians.kelola_penilaian_id')
            ->where('surveypenilaians.user_id', auth()->user()->id)
            ->avg('surveypenilaians.skor');
        return view('page.admin.survey.main', compact('surveyPenilaian'));
    }
    public function create()
    {
        //
    }
    public function store(Request $request, $id)
    {
        //
    }
    public function show(Request $request, AssignPenilai $assignPenilai)
    {
        //
    }
    public function edit(AssignPenilai $assignPenilai)
    {
        //
    }
    public function update(Request $request, AssignPenilai $assignPenilai)
    {
        //
    }
    public function destroy(AssignPenilai $assignPenilai)
    {
        //
    }
    public function export()
    {
        return Excel::download(new SurveyPenilaianExport, 'HasilSurveyPennilaian.csv');
    }
}
