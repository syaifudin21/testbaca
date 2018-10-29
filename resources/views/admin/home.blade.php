@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
              <!-- Default panel contents -->
              <div class="panel-heading">Selamat Datang</div>
              <div class="panel-body">
              <center><b>Aturan Main Med Test</b></center>
                <ol>
                    <li>Buat Sebuah Bacaan Baru</li>
                    <li>Masukkan Soal Soal sesuai bacaan <font color="red"> ( Wajib )</font></li>
                    <li>Bacaan yang dihapus akan masuk spam, dan pembaca tidak dapat melihat </li>
                    <li>Restore untuk mengembalikan (dimenu spam)</li>
                    <li>Hapus permanen untuk menghapus selamanya (dimenu spam)</li>
                </ol>
                <a href="/tambah" class="btn btn-primary ">Tambah Bacaan</a>
              </div>

              <!-- Table -->
              <table class="table" id="myTable">
              <head>
                <tr>
                    <th>#</th>
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Action</th>
                </tr>
              </head>
              <tbody>
                <?php $i = 1 ;?>
                @foreach($bacaans as $bacaan)
                <tr>
                    <td><?= $i++ ?></td>
                    <td>{{ $bacaan->judul}}</td>
                    <td>{{ $bacaan->pencipta}}</td>
                    <td><a href="/baca/{{ $bacaan->id}}" class="btn btn-success btn-sm">Lihat</a></td>
                </tr>
                @endforeach
              </tbody>
              </table>
            </div>
        </div>
    </div>
</div>




@endsection
