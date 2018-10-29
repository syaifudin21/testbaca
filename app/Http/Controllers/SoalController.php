<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\models\membaca;
use App\models\bacaansoal;

class SoalController extends Controller
{
    public function tambah($id)
    {
    	$bacaanid = membaca::find($id);
    	return view('admin/soal/tambahsoal', ['bacaanid' => $bacaanid]);
    }
    public function insert(Request $request, $id)
    {
    	// dd($request);
    	bacaansoal::create([
    		"pertanyaan" 	=> $request->pertanyaan,
    		"id_bacaan"		=> $id,
		    "jawabanbenar"	=> $request->jawaban,
		    "jawaban1" 		=> $request->jawaban1,
		    "jawaban2" 		=> $request->jawaban2,
		    "jawaban3" 		=> $request->jawaban3
        ]);

        return redirect('/baca/'.$id);
    }
    public function edit($id)
    {
        $soalid = bacaansoal::find($id);
        return view('admin/soal/edit', ['soalids' => $soalid, 'id' => $id]);
    }
    public function update(Request $request, $id)
    {
        // dd($request);
        bacaansoal::find($id)->update([
            "pertanyaan"    => $request->pertanyaan,
            "jawabanbenar"  => $request->jawaban,
            "jawaban1"      => $request->jawaban1,
            "jawaban2"      => $request->jawaban2,
            "jawaban3"      => $request->jawaban3
        ]);

        return redirect('/baca/'.$request->id_bacaan);
    }
    public function delete($id, $idb)
    {
        bacaansoal::destroy($id);
        return redirect('/baca/'.$idb);
    }
}
