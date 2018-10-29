@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                <table>
                    <tr>
                        <td>Judul</td>
                        <td width="10%" style="text-align: center;">:</td>
                        <td><b>{{ $membaca->judul}}</b></td>
                    </tr>
                    <tr>
                        <td>Pencipta</td>
                        <td style="text-align: center;">:</td>
                        <td>{{ $membaca->pencipta}}</td>
                    </tr>
                    <tr>
                        <td>Waktu Mulai</td>
                        <td style="text-align: center;">:</td>
                        <td>{{ $waktumulai }}</td>
                    </tr>
                </table>
                </div>

                <div class="panel-body">
                <center><h3>{{ $membaca->judul }}</h3></center>
                    {!! $membaca->bacaan !!}
                </div>
                <?php
                    $waktuselesai = date("H:i:s", time());
                ?>
                <div class="panel-footer">
                <form action="/test/{{ $membaca->id }}/{{$id}}/{{ $waktumulai }}" method="post">
                    <button type="submit"> Selesai & Jawab Pertanyaan</button>
                {{ csrf_field() }}
                </form>
                </div>
            </div>
            <br>
            <div>
            </div>
        </div>
    </div>
</div>
@endsection
