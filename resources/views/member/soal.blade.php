@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-body">
          <h4>M. Syaifudin</h4>
            <b>{{$bacaan->judul}}</b> - 
            <span class="label label-default">  Waktu Membaca Anda 
                <?php 
                    $awal = new DateTime($hasil->waktumulai);
                    $akhir = new DateTime($hasil->waktuselesai);
                    $diff = $awal->diff($akhir);

                    if ($diff->y !=0) { echo $diff->y. " Tahun ";};
                    if ($diff->m !=0) { echo $diff->m. " Bulan ";};
                    if ($diff->d !=0) { echo $diff->d. " Hari ";};
                    if ($diff->h !=0) { echo $diff->h. " Jam ";};
                    if ($diff->i !=0) { echo $diff->i. " Menit ";};
                    if ($diff->s !=0) { echo $diff->s. " Detik ";};
                ?>
            </span>
          </div>
        </div>

        <form action="/test/{{ $id_bacaan }}/{{ $id }}/{{ $waktumulai }}/{{ $waktuselesai }}" method="post">
        <input type="hidden" name="jumlah" value="{{ $jumlah }}">

        @foreach($soals as $soal)
        <input type="hidden" name="idsoal[]" value="{{ $soal->id }}">
            <div class="panel panel-default">
                <div class="panel-heading">
                <b>Pertanyaan</b>
                    <p>{{ $soal->pertanyaan }}</p>
                </div>
                <div class="panel-body">
                <b>Jawaban</b>
                    <div class="radio">
                      <label>
                        <input type="radio" name="pil[{{ $soal->id }}]" value="jawaban1">
                        {{ $soal->jawaban1 }}
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="pil[{{ $soal->id }}]" value="jawaban2">
                        {{ $soal->jawaban2 }}
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="pil[{{ $soal->id }}]" value="jawaban3">
                        {{ $soal->jawaban3 }}
                      </label>
                    </div>
                </div>
            </div>
        @endforeach
                    <button type="submit"> Selesai & Jawab Pertanyaan</button>
                {{ csrf_field() }}
                </form>
            
            <br>
            <div>
            </div>
        </div>
    </div>

</div>
@endsection
