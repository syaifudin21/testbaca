@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                <h4>Perkembangan</h4>
                </div>

                <div class="panel-body">
                </div>
                <div class="table-responsive">
                <table class="table">
                	<thead>
                	<tr>
                		<th>#</th>
                		<th>Bacaan</th>
                		<th>Durasi Membaca</th>
                		<th>Durasi Jawab Soal</th>
                		<th>Benar</th>
                		<th>Salah</th>
                		<th>Tak Dijawab</th>
                	</tr>
                	</thead>
                	<tbody>
                	<?php  $i = 1;?>
                	@foreach($jawabs as $jawab)
                	<tr>
                		<td><?= $i++?></td>
                		{{-- $bacaan = membaca::find($jawabs->id); --}}
                		<td>{{$jawab->judul}}</td>
                		<td>
                			<?php 
                                $awal = new DateTime($jawab->waktumulai);
                                $akhir = new DateTime($jawab->waktuselesai);
                                $diff = $awal->diff($akhir);

                                if ($diff->y !=0) { echo $diff->y. " Tahun ";};
                                if ($diff->m !=0) { echo $diff->m. " Bulan ";};
                                if ($diff->d !=0) { echo $diff->d. " Hari ";};
                                if ($diff->h !=0) { echo $diff->h. " Jam ";};
                                if ($diff->i !=0) { echo $diff->i. " Menit ";};
                                if ($diff->s !=0) { echo $diff->s. " Detik ";};
                            ?>
                		</td>
                		<td>
	                		<?php 
                                $akhir = new DateTime($jawab->waktuselesai);
                                $soal = new DateTime($jawab->waktuselesaisoal);
                                $diff2 = $akhir->diff($soal);

                                if ($diff2->y !=0) { echo $diff2->y. " Tahun ";};
                                if ($diff2->m !=0) { echo $diff2->m. " Bulan ";};
                                if ($diff2->d !=0) { echo $diff2->d. " Hari ";};
                                if ($diff2->h !=0) { echo $diff2->h. " Jam ";};
                                if ($diff2->i !=0) { echo $diff2->i. " Menit ";};
                                if ($diff2->s !=0) { echo $diff2->s. " Detik ";};
                            ?></td>

                		<td>{{$jawab->benar}}</td>
                		<td>{{$jawab->salah}}</td>
                		<td>{{$jawab->kosong}}</td>
                	</tr>
                	@endforeach
                	</tbody>
                </table>
                </div>
                <div class="panel-footer">
                {{-- <form action="/test/{{ $membaca->id }}/{{$id}}/{{ $waktumulai }}" method="post">
                    <button type="submit"> Selesai & Jawab Pertanyaan</button>
                {{ csrf_field() }}
                </form> --}}
                </div>
            </div>
            <br>
            <div>
            </div>
        </div>
    </div>
</div>
@endsection
