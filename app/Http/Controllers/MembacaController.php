<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\models\membaca;
use App\models\bacaansoal;

class MembacaController extends Controller
{
	public function index()
    {
        $membaca = membaca::all();
        return view('membaca/home', ['membacas' => $membaca]);
    }
    public function single($id)
    {
        $membaca = membaca::find($id);
        return view('membaca/single', ['membaca' => $membaca]);
    }
    public function singlesoal($id, $soal)
    {
        return view('membaca/soal');
    }
    public function tambahbacaan()
    {
        return view('membaca/tambah');
    }
    public function tampilsoal($id)
    {
        return view('membaca/tambah', ['id'=> $id]);
    }
    public function tampilperingkat($id)
    {
        return view('membaca/peringkat', ['id'=> $id]);
    }
}
