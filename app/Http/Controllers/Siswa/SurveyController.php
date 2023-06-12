<?php

namespace App\Http\Controllers\Siswa;

use App\Http\Controllers\Controller;
use App\Models\kelolaPenilaian;
use App\Models\Penilaian;
use App\Models\SurveyPenilaian;
use App\Models\User as AssignPenilai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class SurveyController extends Controller
{
    public function index(Request $request)
    {
        //
    }
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $kelolaPenilaian = KelolaPenilaian::count();
        for ($i = 0; $i < $kelolaPenilaian; $i++) {
            if (isset($request->{"pertanyaan_$i"})) {
                $survey = new SurveyPenilaian();
                $survey->penilai_id = Auth::user()->id;
                $survey->user_id = $request->id;
                $survey->kelola_penilaian_id = $request->{"pertanyaan_$i"};
                $survey->skor = $request->{"option2_$i"};
                if ($survey->skor == 1) {
                    $survey->rubik = "bad";
                } else if ($survey->skor == 2) {
                    $survey->rubik = "poor";
                } else if ($survey->skor == 3) {
                    $survey->rubik = "fair";
                } else if ($survey->skor == 4) {
                    $survey->rubik = "good";
                } else if ($survey->skor == 5) {
                    $survey->rubik = "good";
                } else if ($survey->skor == 6) {
                    $survey->rubik = "very good";
                } else {
                    $survey->rubik = "excellent";
                }
                $survey->created_at = Date::now();
                $survey->updated_at = Date::now();
                $survey->save();
            }
        }
        $penilaian = Penilaian::where('user_id', $request->id)->where('penilai_id', Auth::user()->id)->first();
        if ($penilaian) {
            $penilaian->delete();
        }

        return response()->json([
            'alert' => 'success',
            'message' => 'Penilaian tersimpan',
        ]);
    }
    public function show(AssignPenilai $assignPenilai)
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
}
