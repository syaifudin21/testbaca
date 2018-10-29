<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\models\membaca;
use App\models\bacaansoal;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dafpacaan = membaca::all();
        return view('admin/home', ['bacaans' => $dafpacaan]);
    }
    public function read($id)
    {
        $bacaanid = membaca::find($id);
        $soalbacaanid = DB::table('bacaansoal')->where('id_bacaan', $id)->get();
        return view('admin/bacaan/bacaan', ['bacaanid'=> $bacaanid,'soals'=> $soalbacaanid ]);
    }
    public function edit($id)
    {
        $bacaanid = membaca::find($id);
        return view('admin/bacaan/edit', ['bacaanid'=> $bacaanid]);
    }
    public function tambah()
    {
        return view('admin/bacaan/tambah');
    }
    public function insert(Request $request)
    {
        membaca::create([
            'judul'     => $request->judul,
            'label'     => $request->label,
            'waktu'     => $request->waktu,
            'pencipta'  => $request->pencipta,
            'bacaan'    => $request->bacaan
        ]);
        return redirect('/home');
    }
    public function update(Request $request, $id)
    {
        membaca::find($id)->update([
            'judul'     => $request->judul,
            'label'     => $request->label,
            'waktu'     => $request->waktu,
            'pencipta'  => $request->pencipta,
            'bacaan'    => $request->bacaan
        ]);
        return redirect('/baca/'.$id);
    }
    public function delete($id)
    {
        membaca::destroy($id);
        return redirect('/home');
    }
    public function spam()
    {
        $bacaan = membaca::onlyTrashed()->get();
        return view('admin/bacaan/spam',['bacaans'=> $bacaan]);
    }
    public function restore($id)
    {
        membaca::withTrashed()->where('id', $id)->restore();
        return redirect('/home');
    }
    public function destroy($id)
    {
        // menghapus bacaan
        $flight = new membaca;
        $flight->where('id', $id)->forceDelete();
        // menghapus soal bacaan
        $flight = new bacaansoal;
        $flight->where('id_bacaan', $id)->forceDelete();

        return redirect('/home');
    }
}
