<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\kelolaPenilaian;
use App\Models\Penilaian;
use App\Models\User as AssignPenilai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class AssignPenilaiAllController extends Controller
{
    public function index(Request $request, $id)
    {
        //
    }
    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        $penilai = Penilaian::get();
        $previousUrl = url()->previous();
        $id_trim = Str::of($previousUrl)->afterLast('/')->__toString();
        $collection = AssignPenilai::where('id', '!=', $id_trim)
            ->where('role', '!=', 'a')->get();
        foreach ($collection as $c) {
            $penilaian = new Penilaian();
            $penilaian->user_id = $id_trim;
            foreach ($penilai as $p) {
                if ($p->user_id == $id_trim && $p->penilai_id = $c->id) {
                    return response()->json([
                        'alert' => 'error',
                        'message' => 'Penilai sudah diassgin pada user ini',
                    ]);
                }
            }
            $penilaian->penilai_id = $c->id;
            $penilaian->save();
        }

        return response()->json([
            'alert' => 'success',
            'message' => 'Penilai ' . $request->name . ' berhasil di assign',
        ]);
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
}
