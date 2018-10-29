@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <form action="/baca/{{$bacaanid->id}}" method="post">
                <input type="hidden" name="_method" value="PUT">
                <div class="panel-heading"><b>Edit Bacaan</b></div>

                <div class="panel-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Judul</label>
                        <input type="text" name="judul" class="form-control" id="exampleInputEmail1" placeholder="Judul" value="{{ $bacaanid->judul }}">
                    </div>

                    <div class="row">
                    <div class="form-group  col-sm-4">
                        <label for="exampleInputEmail1">Label</label>
                        <input type="text" name="label" class="form-control" id="exampleInputEmail1" placeholder="Label" value="{{ $bacaanid->label }}">
                    </div>
                    <div class="form-group  col-sm-4">
                        <label for="exampleInputEmail1">Durasi Waktu /Menit</label>
                        <input type="text" name="waktu" class="form-control" id="exampleInputEmail1" placeholder="Durasi Waktu /Menit" value="{{ $bacaanid->waktu }}">
                    </div>
                    <div class="form-group  col-sm-4">
                        <label for="exampleInputEmail1">Pencipta</label>
                        <input type="text" name="pencipta" class="form-control" id="exampleInputEmail1" placeholder="Pencipta" value="{{ $bacaanid->pencipta }}">
                    </div>
                    </div>

                    <textarea class="wysiwyg" name="bacaan" rows="10" placeholder="Isi Dongeng">{{ $bacaanid->bacaan }}</textarea>
                </div>
                <div class="panel-footer">
                    <button type="submit" class="btn btn-primary btn-sm" name="submit" >Edit</button>
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
                      <a href="/tambahsoal/{{ $bacaanid->id }}" class="btn btn-default">Tambah Pertanyaan</a>
                      </div>
                    </div>

                    <hr>
            <div>
            </div>
        </div>
    </div>

</div>
@endsection