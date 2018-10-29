@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Hai, Selamat Datang</div>

                <div class="panel-body">
                    <p>
                        <b>MedTest</b> adalah Aplikasi tolak ukur pemahaman untuk mmahami sebuah cerita/bacaan.

                    </p>
                    <hr>
                    <center><b>Aturan Main</b></center>
                    <ol>
                        <li>Pilih Bacaan salah satu dari tabel dibawah ini</li>
                        <li>Pilih Bacaan dan waktu akan dimulai <font color="red">( Waktu akan bergulir ketika anda Pilih )</font></li>
                        <li>Setelah membaca klik 'Selesai Baca' dan Kamu harus menjawab soal-soal sebagai tolak ukur pemahaman</li>
                        <li>Selesai, - Anda dapat melihat riwayat test anda di menu 'Perkembangan'</li>
                    </ol>
                    <hr>
                    
                </div>
                <table class="table">
                  <tr>
                    <th>#</th>
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Mulai</th>
                  </tr>
                  <?php $i = 1 ;?>
                  @foreach($membacas as $membaca)
                    <tr>
                        <td><?= $i++ ?></td>
                        <td>{{ $membaca->judul}}</td>
                        <td>{{ $membaca->pencipta}}</td>
                        <td>
                        <form action="/test/{{ $membaca->id}}" method="post">
                        <input type="hidden" name="id_member" value="{{Auth::user()->id}}">
                        <button type="submit" class="btn btn-success btn-sm">Mulai</button>
                        {{ csrf_field() }}
                        </form>
                    </tr>
                   @endforeach
                </table>
            </div>
            <br>
            <div>
            </div>
        </div>
    </div>

</div>
@endsection

