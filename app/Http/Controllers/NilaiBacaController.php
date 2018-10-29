<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\membaca;
use App\models\bacaansoal;
use App\models\nilaibaca;
use App\models\jawabsoal;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class NilaiBacaController extends Controller
{
    public function tambah(Request $request, $id_bacaan)
    {
        date_default_timezone_set('Asia/Jakarta');
        $sekarang = date('Y-m-d H:i:s', time());
    	$test = nilaibaca::create([
            'id_member'     => $request->id_member,
            'id_bacaan'     => $id_bacaan,
            'waktumulai'    => $sekarang
        ]);
        $id = $test->id;

        return redirect('/test/'.$id_bacaan.'/'.$id.'/'.$sekarang);
    }
    public function mulai($id_bacaan, $id, $waktumulai)
    {
        $membaca = membaca::find($id_bacaan);
        return view('member/single', ['membaca' => $membaca, 'waktumulai' => $waktumulai, 'id'=>$id]);
    }
    public function selesaibaca($id_bacaan, $id, $waktumulai)
    {
        date_default_timezone_set('Asia/Jakarta');
        $waktuselesai = date("Y-m-d H:i:s", time());
        $id_member = Auth::user()->id;
        $test = nilaibaca::find($id)->update([
            'waktuselesai'  => $waktuselesai
        ]);
        return redirect('/test/'.$id_bacaan.'/'.$id.'/'.$waktumulai.'/'.$waktuselesai);
    }
    public function soal($id_bacaan, $id, $waktumulai,$waktuselesai)
    {
        $soalbacaanid = DB::table('bacaansoal')->where('id_bacaan', $id_bacaan)->get();
        $jumlah       = count($soalbacaanid);
        $hasil        = nilaibaca::find($id);
        $bacaan       = membaca::find($id_bacaan);

        return view('member/soal', ['soals'=> $soalbacaanid, 'id_bacaan'=> $id_bacaan, 'waktumulai'=>$waktumulai, 'waktuselesai'=> $waktuselesai, 'jumlah'=>$jumlah, 'id'=>$id, 'bacaan'=> $bacaan, 'hasil'=> $hasil]);
    }
    public function selesaisoal(Request $request, $id_bacaan, $id, $waktumulai,$waktuselesai)
    {
        // dd($request);
        date_default_timezone_set('Asia/Jakarta');
        $waktusoal = date("Y-m-d H:i:s", time());

        $id_member = Auth::user()->id;

        
        $pilihan = $request->pil ; 
        $jumlah = $request->jumlah;
        $id_soal = $request->idsoal;

        $benar = 0;
        $salah = 0;
        $kosong = 0;
        
        // dd($pilihan[3]);

        for ($i=0; $i < $jumlah ; $i++) { 
            $nomor = $id_soal[$i];
            if (empty($pilihan[$nomor])) {
                $kosong++;
            }else {
                $jawaban = $pilihan[$nomor];
                $test = DB::table('bacaansoal')->where(['id' => $nomor, 'jawabanbenar' => $jawaban])->get();
                if (count($test)==1) {
                    $benar++;
                }else{
                    $salah++;
                }
            }
        };

        $test = nilaibaca::find($id)->update([
            'benar'  => $benar,
            'salah'  => $salah,
            'kosong' => $kosong,
            'waktuselesaisoal'=>$waktusoal
        ]);

        return redirect('/test/'.$id_bacaan.'/'. $id.'/'.$waktumulai.'/'.$waktuselesai.'/'.$benar.'/'.$salah.'/'.$kosong);
    }
    public function hasil($id_bacaan, $id, $waktumulai,$waktuselesai, $benar, $salah, $kosong)
    {
        $id_member = Auth::user()->id;
        $hasil = nilaibaca::find($id);
        $bacaan = membaca::find($id_bacaan);

        return view('member/hasil', ['hasil' => $hasil, 'bacaan' => $bacaan]);
    }
}
