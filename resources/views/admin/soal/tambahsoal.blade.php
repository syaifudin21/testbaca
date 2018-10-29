@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            <div class="panel panel-default">
            <form action="/tambahsoal/{{$bacaanid->id}}" method="post">
                <div class="panel-heading">
                <h4>Pertanyaan</h4>
                </div>
                <div class="panel-body">
                <textarea class="form-control" rows="2" placeholder="Pertanyaan" name="pertanyaan"></textarea>
                <hr>
                    <div class="input-group">
                      <span class="input-group-addon">
                        <input type="radio" name="jawaban" value="jawaban1" checked>
                      </span>
                      <input type="text" class="form-control" placeholder="jawaban A" name="jawaban1">
                    </div>
                    <div class="input-group">
                      <span class="input-group-addon">
                        <input type="radio" name="jawaban" value="jawaban2">
                      </span>
                      <input type="text" class="form-control" placeholder="jawaban B" name="jawaban2">
                    </div>
                    <div class="input-group">
                      <span class="input-group-addon">
                        <input type="radio" name="jawaban" value="jawaban3">
                      </span>
                      <input type="text" class="form-control" placeholder="jawaban C" name="jawaban3">
                    </div>
                </div>
                <div class="panel-footer">
                    <button type="submit" class="btn btn-primary btn-sm" name="submit" >Simpan</button>
                    <a href="/baca/{{$bacaanid->id}}" class="btn btn-default btn-sm">Batal</a>
                </div>
                {{ csrf_field() }}
                </form>
            </div>
            <div>
            </div>
        </div>
    </div>

</div>
@endsection