<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\models\membaca;
use App\models\bacaansoal;
use App\models\nilaibaca;
use App\models\jawabsoal;
use Illuminate\Support\Facades\Auth;

class MemberController extends Controller
{
    public function index()
    {
        $membaca = membaca::all();
        return view('member/home', ['membacas' => $membaca]);
    }
    public function perkembangan()
    {
        $id_member = Auth::user()->id;

        nilaibaca::where('id_member', $id_member)->get();
        $jawabs = DB::table('nilaibaca')
            ->leftJoin('bacaan', 'nilaibaca.id_bacaan', '=', 'bacaan.id')
            ->get();

		// dd($jawabs);        

        return view('member/perkembangan', ['jawabs' => $jawabs]);
    }
}
