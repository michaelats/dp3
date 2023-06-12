<?php

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\Controller;
use App\Models\Penilaian;
use App\Models\User as AssignPenilai;
use Illuminate\Http\Request;

class DataPenilaiController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $keywords = $request->keywords;
            $collection = Penilaian::join('users', 'users.id', '=', 'penilaians.user_id')
                ->select('penilaians.*', 'users.*')
                ->where('users.name', 'like', '%' . $keywords . '%')
                ->get();
            return view('page.staff.assignPenilai.list', compact('collection'));
        }
        return view('page.staff.assignPenilai.main');
    }
    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        //
    }
    public function show($id)
    {
        $collection = Penilaian::join('users', 'users.id', '=', 'penilaians.user_id')
            ->select('penilaians.*', 'users.*')
            ->where('penilaians.user_id', $id)
            ->first();
        return view('page.staff.assignPenilai.show', compact('collection'));
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
