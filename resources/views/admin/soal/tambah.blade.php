@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <form action="/tambah" method="post">
                <div class="panel-heading"><b>Edit Bacaan</b></div>

                <div class="panel-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Judul</label>
                        <input type="text" name="judul" class="form-control" id="exampleInputEmail1" placeholder="Judul">
                    </div>

                    <div class="row">
                    <div class="form-group  col-sm-4">
                        <label for="exampleInputEmail1">Label</label>
                        <input type="text" name="label" class="form-control" id="exampleInputEmail1" placeholder="Label">
                    </div>
                    <div class="form-group  col-sm-4">
                        <label for="exampleInputEmail1">Durasi Waktu /Menit</label>
                        <input type="text" name="waktu" class="form-control" id="exampleInputEmail1" placeholder="Durasi Waktu /Menit">
                    </div>
                    <div class="form-group  col-sm-4">
                        <label for="exampleInputEmail1">Pencipta</label>
                        <input type="text" name="pencipta" class="form-control" id="exampleInputEmail1" placeholder="Pencipta">
                    </div>
                    </div>

                    <textarea class="form-control" name="bacaan" rows="10" placeholder="Isi Dongeng"></textarea>
                </div>
                <div class="panel-footer">
                    <button type="submit" class="btn btn-primary btn-sm" name="submit" >Tambah</button>
                </div>
                {{ csrf_field() }}
                </form>
            </div>

                    <div class="btn-toolbar" role="toolbar" aria-label="...">
                      <div class="btn-group" role="group" aria-label="...">
                      <a type="button" class="btn btn-default">1</a>
                      <a type="button" class="btn btn-default">2</a>
                      <a type="button" class="btn btn-default">3</a>
                      <a type="button" class="btn btn-default">4</a>
                      <a type="button" class="btn btn-default">5</a>
                      <a type="button" class="btn btn-default">6</a>
                      </div>
                      <div class="btn-group" role="group" aria-label="...">
                      <a href="/tambahbacaan/1" class="btn btn-default">Tambah Pertanyaan</a>
                      </div>
                    </div>

                    <hr>


            @if(isset($id))
            <div class="panel panel-default">

                <div class="panel-heading">
                <h4>Pertanyaan</h4>
                </div>
                <div class="panel-body">
                <textarea class="form-control" rows="2" placeholder="Pertanyaan"></textarea>
                <hr>
                    <div class="input-group">
                      <span class="input-group-addon">
                        <input type="radio" name="jawaan1">
                      </span>
                      <input type="text" class="form-control" placeholder="jawaban">
                    </div>
                    <div class="input-group">
                      <span class="input-group-addon">
                        <input type="radio" name="jawaan1">
                      </span>
                      <input type="text" class="form-control" placeholder="jawaban">
                    </div>
                    <div class="input-group">
                      <span class="input-group-addon">
                        <input type="radio" name="jawaan1">
                      </span>
                      <input type="text" class="form-control" placeholder="jawaban">
                    </div>
                </div>
                <div class="panel-footer">
                    <a href="/membaca/1/12131" class="btn btn-primary btn-sm">
                        Simpan
                    </a> 
                    <a href="/membaca/1/12131" class="btn btn-warning btn-sm">
                        Perbarui
                    </a>
                    <a href="/membaca/1/12131" class="btn btn-danger btn-sm">
                        Hapus
                    </a>
                </div>
            </div>
            @endif
            <div>
            </div>
        </div>
    </div>

</div>
@endsection    
