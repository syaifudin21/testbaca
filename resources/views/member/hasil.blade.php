@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-danger">
                <div class="panel-heading">
                <center><h3>Hasil Test Anda</h3></center>
                
                </div>

                <div class="panel-body">
                    <table>
                    <tr>
                        <td>Judul</td>
                        <td width="10%" style="text-align: center;">:</td>
                        <td><b>{{ $bacaan->judul}}</b></td>
                    </tr>
                    <tr>
                        <td>Lama Membaca</td>
                        <td width="10%" style="text-align: center;">:</td>
                        <td><b>
                            <?php 
                                $awal = new DateTime($hasil->waktumulai);
                                $akhir = new DateTime($hasil->waktuselesai);
                                $diff = $awal->diff($akhir);

                                if ($diff->y !=0) { echo $diff->y. " Tahun ";};
                                if ($diff->m !=0) { echo $diff->m. " Bulan ";};
                                if ($diff->d !=0) { echo $diff->d. " Hari ";};
                                if ($diff->h !=0) { echo $diff->h. " Jam ";};
                                if ($diff->i !=0) { echo $diff->i. " Menit ";};
                                if ($diff->s !=0) { echo $diff->s. " Detik ";};
                            ?>
                        </b></td>
                    </tr>
                    <tr>
                        <td>Lama Menjawab Soal</td>
                        <td width="10%" style="text-align: center;">:</td>
                        <td><b>
                            <?php 
                                $akhir = new DateTime($hasil->waktuselesai);
                                $soal = new DateTime($hasil->waktuselesaisoal);
                                $diff2 = $akhir->diff($soal);

                                if ($diff2->y !=0) { echo $diff2->y. " Tahun ";};
                                if ($diff2->m !=0) { echo $diff2->m. " Bulan ";};
                                if ($diff2->d !=0) { echo $diff2->d. " Hari ";};
                                if ($diff2->h !=0) { echo $diff2->h. " Jam ";};
                                if ($diff2->i !=0) { echo $diff2->i. " Menit ";};
                                if ($diff2->s !=0) { echo $diff2->s. " Detik ";};
                            ?>
                        </b></td>
                    </tr>
                    <tr>
                        <td>Jawaban Benar</td>
                        <td width="10%" style="text-align: center;">:</td>
                        <td><b>{{ $hasil->benar}}</b></td>
                    </tr>
                    <tr>
                        <td>Jawaban Salah</td>
                        <td width="10%" style="text-align: center;">:</td>
                        <td><b>{{ $hasil->salah}}</b></td>
                    </tr>
                    <tr>
                        <td>Soal Tak Terjawab</td>
                        <td width="10%" style="text-align: center;">:</td>
                        <td><b>{{ $hasil->kosong}}</b></td>
                    </tr>
                    <tr>
                        <td>Total Nilai</td>
                        <td width="10%" style="text-align: center;">:</td>
                        <?php 
                         function Dibaca($x) {
                                        $angkaBaca = array("Nol", "Satu", "Dua", "Tiga", "Empat", "Lima", "Enam", "Tujuh", "Delapan", "Sembilan", "Sepuluh", "Sebelas");
                                        switch ($x) {
                                            case ($x < 12):
                                                echo " " . $angkaBaca[$x];
                                                break;
                                            case ($x < 20):
                                                echo $result = Dibaca($x - 10) . " Belas";
                                                break;
                                            case ($x < 100):
                                                echo Dibaca($x / 10);
                                                echo " Puluh ";
                                                echo Dibaca($x % 10);
                                                break;
                                            case ($x < 200):
                                                echo " Seratus ";
                                                echo Dibaca($x - 100);
                                                break;
                                            case ($x < 1000):
                                                echo Dibaca($x / 100);
                                                echo " Ratus";
                                                echo Dibaca($x % 100);
                                                break;
                                            case ($x < 2000):
                                                echo " Seribu ";
                                                echo Dibaca($x - 1000);
                                                break;
                                            case ($x < 1000000):
                                                echo Dibaca($x / 1000);
                                                echo " Ribu ";
                                                echo Dibaca($x % 1000);
                                                break;
                                            case ($x < 1000000000):
                                                echo Dibaca($x / 1000000);
                                                echo " Juta ";
                                                echo Dibaca($x % 1000000);
                                                break;
                                        }
                                    }
                        ?>
                        <td><b><?= 100/($hasil->benar + $hasil->salah + $hasil->kosong)*$hasil->benar;?> - <?= Dibaca(100/($hasil->benar + $hasil->salah + $hasil->kosong)*$hasil->benar);?></b></td>
                    </tr>
                    </table>
                </div>
                <div class="panel-footer">
                
                </div>
            </div>
            <br>
            <div>
            </div>
        </div>
    </div>
</div>
@endsection
