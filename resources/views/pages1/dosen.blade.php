<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>Soal 2</legend>
       <table border="2">
        <tr>
            <th colspan="4">Dosen Pembingbing : Yusuf Bachtiar</th>
        </tr>
            <tr>
                <th>Nama Mahasiswa</th>
                <th>Mata Kuliah</th>
                <th>Nilai</th>
                <th>Grade</th>
            </tr>
            @foreach($dosen as $data)
            <tr>
                <td>{{$data['mahasiswa']}}</td>
                <td>{{$data['matkel']}}</td>
                <td>{{$data['nilai']}}</td>
                @if ($data ['nilai'] >=90)
                    <td>A</td>
                @elseif ($data ['nilai'] >=80)
                    <td>B</td>
                @elseif ($data ['nilai'] >=70)
                    <td>C</td>
                @elseif ($data ['nilai'] >=50)
                    <td>D</td>
                @else
                    <td>E</td>
                @endif
            </tr>
            @endforeach
       </table>
        <br>

        
       <table border="2">
        <tr>
            <th colspan="4">Dosen Pembingbing : Yaris Riyadi</th>
        </tr>
            <tr>
                <th>Nama Mahasiswa</th>
                <th>Mata Kuliah</th>
                <th>Nilai</th>
                <th>Grade</th>
            </tr>
            @foreach($dosen2 as $data)
            <tr>
                <td>{{$data['mahasiswa']}}</td>
                <td>{{$data['matkel']}}</td>
                <td>{{$data['nilai']}}</td>
                @if ($data ['nilai'] >=90)
                    <td>A</td>
                @elseif ($data ['nilai'] >=80)
                    <td>B</td>
                @elseif ($data ['nilai'] >=70)
                    <td>C</td>
                @elseif ($data ['nilai'] >=50)
                    <td>D</td>
                @else
                    <td>E</td>
                @endif
            </tr>
            @endforeach
       </table>
    </fieldset>
</body>
</html>