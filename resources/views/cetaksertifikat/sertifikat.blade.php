<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Data Pribadi Warga</title>
    <style>
        /* body {
            writing-mode: tb-rl;
        } */
        /* @page {
            size:landscape;
        } */
        @page { 
        size: landscape;
        }
        body { 
            writing-mode: tb-rl;
        }
        table, tr, td, th {
            border-collapse: collapse;
            align-content: center;
            margin-top: 400px;
            margin-left: 50px;
            margin-right: 250px;
            /* margin: auto;  */
        }
        th, td {
            text-align: center;
        }
        
    </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <table class="table table-borderless" style="width:90%">
            <tbody>
                <tr>
                    <td><h3>{{ $warga->nama }}</h3></td>
                </tr>
            </tbody>
        </table>
    </div>
    <script>window.print()</script>
</body>
</html>