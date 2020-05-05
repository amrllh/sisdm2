<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Data Pribadi Warga</title>
    <style>
        table, tr, td, th {
            border: 1px solid black;
            border-collapse: collapse;
        }
        th, td {
            padding: 5px;
        }
        th, {
            text-align: center;
        }
    </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
    
    <h4 style="text-align: center;"><strong>Laporan Data Penilaian Warga Binaan</strong></h4>
    <h4 style="text-align: center;"><strong>Kampung Marketer Purbalingga</strong></h4>
    <hr/>
    <p style="text-align: center;">&nbsp;</p>
    <div class="container">
        <table class="table table-bordered table-striped" style="width:90%" align="center">
            <tbody>
                <thead>
                    <th colspan="3">Tabel Data Pribadi</th>
                </thead>
                <tr>
                    <th>NIK</th>
                    <th>:</th>
                    <td>{{ $warga->nik }}</td>
                </tr>
                <tr>
                    <th>Nama Lengkap</th>
                    <th>:</th>
                    <td>{{ $warga->nama }}</td>
                </tr>
                <tr>
                    <th>Jenis Kelamin</th>
                    <th>:</th>
                    <td>{{ $warga->kelamin }}</td>
                </tr>
                <tr>
                    <th>Tempat Lahir</th>
                    <th>:</th>
                    <td>{{ $warga->tempatlahir }}</td>
                </tr>
                <tr>
                    <th>Tanggal Lahir</th>
                    <th>:</th>
                    <td>{{ $warga->tgllahir }}</td>
                </tr>
                <tr>
                    <th>Agama</th>
                    <th>:</th>
                    <td>{{ $warga->agama }}</td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <th>:</th>
                    <td>{{ $warga->alamat }}</td>
                </tr>
                <tr>
                    <th>Keterampilan</th>
                    <th>:</th>
                    <td>{{ $warga->courses->keterampilan }}</td>
                </tr>
            </tbody>
        </table>
    </div>
    {{-- container  --}}

    <br>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <table class="table table-bordered table-sm table-striped" style="width:80%" align="center">
                    <tbody>
                            <thead>
                                <th colspan="3">Tabel Keahlian Warga</th>
                            </thead>
                            @if($skill == null)
                            <tr>
                                Data Keahlian warga belum terisi
                            </tr>
                            @else
                                @foreach ($skill as $skills)
                                <tr>
                                    <th>Keahlian {{ $loop->iteration }}</th>
                                    <th>:</th>
                                    <td>{{ $skills->masterexpertises->expertise }}</td>
                                </tr>
                                @endforeach
                            @endif
                        </tbody>
                </table>
            </div>
            {{-- col  --}}
            <br>
            <div class="col-6">
                <table class="table table-bordered table-sm table-striped" style="width:80%" align="center">
                    <tbody>
                            <thead>
                                <th colspan="3">Tabel Pengalaman Warga</th>
                            </thead>
                            @if($skill == null)
                            <tr>
                                Data Pengalaman warga belum terisi
                            </tr>
                            @else
                                @foreach ($experiences as $experience)
                                <tr>
                                    <th>Pengalaman {{ $loop->iteration }}</th>
                                    <th>:</th>
                                    <td>{{ $experience->pengalaman1 }}</td>
                                </tr>
                                @endforeach
                            @endif
                        </tbody>
                </table>
            </div>
        </div>
        {{-- row --}}
    </div>
    {{-- container  --}}

    <script>window.print()</script>
</body>
</html>