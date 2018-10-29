@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <form action="/tambah" method="post">
                <div class="panel-heading"><b>Tambah Bacaan</b></div>

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
                        <label for="exampleInputEmail1">Durasi Waktu /Menit Maksimal</label>
                        <input type="text" name="waktu" class="form-control" id="exampleInputEmail1" value="01:00:00">
                    </div>
                    <div class="form-group  col-sm-4">
                        <label for="exampleInputEmail1">Pencipta</label>
                        <input type="text" name="pencipta" class="form-control" id="exampleInputEmail1" placeholder="Pencipta">
                    </div>
                    </div>

                    <textarea class="wysiwyg" name="bacaan" rows="10" placeholder="Isi Dongeng"></textarea>
                </div>
                <div class="panel-footer">
                    <button type="submit" class="btn btn-primary btn-sm" name="submit" >Tambah</button>
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
