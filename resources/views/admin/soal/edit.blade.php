@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">


            <div class="panel panel-default">
            <form action="/editsoal/{{$id}}" method="post">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="id_bacaan" value="{{$soalids->id_bacaan}}">
                <div class="panel-heading">
                <h4>Pertanyaan</h4>
                </div>
                <div class="panel-body">
                <textarea class="form-control" rows="2" placeholder="Pertanyaan" name="pertanyaan">{{$soalids->pertanyaan}}</textarea>
                <hr>
                    <div class="input-group">
                      <span class="input-group-addon">
                          @if($soalids->jawabanbenar == 'jawaban1')
                            <input type="radio" name="jawaban" value="jawaban1" checked>
                          @else
                            <input type="radio" name="jawaban" value="jawaban1">
                          @endif
                      </span>
                      <input type="text" class="form-control" placeholder="jawaban A" name="jawaban1" value="{{$soalids->jawaban1}}">
                    </div>
                    <div class="input-group">
                      <span class="input-group-addon">
                          @if($soalids->jawabanbenar == 'jawaban2')
                            <input type="radio" name="jawaban" value="jawaban2" checked>
                          @else
                            <input type="radio" name="jawaban" value="jawaban2">
                          @endif
                      </span>
                      <input type="text" class="form-control" placeholder="jawaban B" name="jawaban2" value="{{$soalids->jawaban2}}">
                    </div>
                    <div class="input-group">
                      <span class="input-group-addon">
                          @if($soalids->jawabanbenar == 'jawaban3')
                            <input type="radio" name="jawaban" value="jawaban3" checked>
                          @else
                            <input type="radio" name="jawaban" value="jawaban3">
                          @endif
                      </span>
                      <input type="text" class="form-control" placeholder="jawaban C" name="jawaban3" value="{{$soalids->jawaban3}}">
                    </div>
                </div>
                <div class="panel-footer">
                    <button type="submit" class="btn btn-primary btn-sm" name="submit" >Simpan</button>
                    <a href="/membaca/1/12131" class="btn btn-warning btn-sm">
                        Perbarui
                    </a>
                    <a href="/membaca/1/12131" class="btn btn-danger btn-sm">
                        Hapus
                    </a>
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