@extends('layouts.head')

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
        th, thead {
            text-align: center;
        }
        /* @page { 
            size: landscape;
        }
        body { 
            writing-mode: tb-rl;
        } */
    </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
    
    <h4 style="text-align: center;"><strong>Laporan Data Pribadi Warga Binaan</strong></h4>
    <h4 style="text-align: center;"><strong>Kampung Marketer Purbalingga</strong></h4>
    <hr/>
    <p style="text-align: center;">&nbsp;</p>
    <div class="container">
        <div class="row">
            <table class="table table-bordered" style="width:100%">
                <tbody>
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>NIK</th>
                            <th>Nama Lengkap</th>
                            <th>Jenis Kelamin</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>Agama</th>
                            <th>Alamat</th>
                            <th>Keterampilan</th>
                        </tr>
                    </thead>
                    @foreach ($warga as $warga)
                    <tbody>
                        <tr>
                            <td style="text-align:center;">{{ $loop->iteration }}.</td>
                            <td>{{ $warga->nik }}</td>
                            <td>{{ $warga->nama }}</td>
                            <td>{{ $warga->kelamin }}</td>
                            <td>{{ $warga->tempatlahir }}</td>
                            <td>{{ $warga->tgllahir }}</td>
                            <td>{{ $warga->agama }}</td>
                            <td>{{ $warga->alamat }}</td>
                            <td>{{ $warga->courses->keterampilan }}</td>
                        </tr>
                    </tbody>
                        
                    @endforeach
                </tbody>
            </table>
        </div>
        {{-- row  --}}
    </div>
    {{-- container  --}}
        
    <script>window.print()</script>
</body>
</html>