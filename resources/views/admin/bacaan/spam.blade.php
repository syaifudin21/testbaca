@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
              <!-- Default panel contents -->
              <div class="panel-heading">Halaman Spam</div>
              <div class="panel-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              </div>

              <!-- Table -->
              <table class="table">
                <tr>
                    <th>#</th>
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Action</th>
                </tr>

                @foreach($bacaans as $bacaan)
                <tr>
                    <td>1</td>
                    <td>{{ $bacaan->judul}}</td>
                    <td>{{ $bacaan->pencipta}}</td>
                    <td>
                    <form action="/restore/{{ $bacaan->id }}" method="post" style="float: left; margin-left: 2px">
                        <button type="submit" class="btn btn-success btn-sm left">Restore</button> 
                        <input type="hidden" name="_method" value="DELETE">
                        {{ csrf_field() }}
                    </form>
                    <form action="/hapus/{{ $bacaan->id }}" method="post" style="float: left; margin-left: 2px">
                        <button type="submit" class="btn btn-danger btn-sm left">Hapus Permanen</button> 
                        <input type="hidden" name="_method" value="DELETE">
                        {{ csrf_field() }}
                    </form>
                    </td>
                </tr>
                @endforeach
                
              </table>
            </div>
        </div>
    </div>
</div>
@endsection
