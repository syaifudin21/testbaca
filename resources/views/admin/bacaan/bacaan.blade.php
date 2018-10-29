@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><b>{{$bacaanid->judul}}</b></div>

                <div class="panel-body">
                    
                    {!!$bacaanid->bacaan!!}

                </div>
                <div class="panel-footer">
                <p class="" style="float: right;">
                Pcpt. {{$bacaanid->pencipta}}</p>
                <div class="btn-group" role="group" aria-label="...">
                	<a href="/baca/{{ $bacaanid->id }}/edit" class="btn btn-default btn-sm" style="float: left; margin-left: 2px">Edit</a> 
                    <form action="/baca/{{ $bacaanid->id }}" method="post" style="float: left; margin-left: 2px">
                        <button type="submit" class="btn btn-default btn-sm left">Hapus</button> 
                        <input type="hidden" name="_method" value="DELETE">
                        {{ csrf_field() }}
                    </form>
                	<a href="/peringkat/3" class="btn btn-default btn-sm" style="float: left; margin-left: 2px">Peringkat</a>
                    <a href="/tambahsoal/{{ $bacaanid->id }}" class="btn btn-default btn-sm" style="float: left; margin-left: 2px">Tambah Pertanyaan</a>
                </div>
                </div> 
            </div>

            <hr>


            @foreach($soals as $soal)
            <div class="panel panel-default">
                <div class="panel-heading">
                <b>Pertanyaan</b>
                <p>{{ $soal->pertanyaan}}</p>
                </div>
                <ul class="list-group">
                @if($soal->jawabanbenar == 'jawaban1')
                    <li class="list-group-item active">A - {{ $soal->jawaban1}}</li>
                @else
                    <li class="list-group-item">A - {{ $soal->jawaban1}}</li>
                @endif
                @if($soal->jawabanbenar == 'jawaban2')
                    <li class="list-group-item active">B - {{ $soal->jawaban2}}</li>
                @else
                    <li class="list-group-item">B - {{ $soal->jawaban2}}</li>
                @endif
                @if($soal->jawabanbenar == 'jawaban3')
                    <li class="list-group-item active">C - {{ $soal->jawaban3}}</li>
                @else
                    <li class="list-group-item">C - {{ $soal->jawaban3}}</li>
                @endif
                </ul>
                <div class="btn-group" role="group" aria-label="...">
                    <a href="/editsoal/{{  $soal->id }}" class="btn btn-default btn-sm" style="float: left; margin-left: 2px">Perbarui</a> 
                    <form action="/hapussoal/{{ $soal->id }}/{{ $bacaanid->id }}" method="post" style="float: left; margin-left: 2px">
                        <button type="submit" class="btn btn-default btn-sm left">Hapus</button> 
                        <input type="hidden" name="_method" value="DELETE">
                        {{ csrf_field() }}
                    </form>
                </div>
            </div>
            @endforeach

        </div>
    </div>

</div>
@endsection
