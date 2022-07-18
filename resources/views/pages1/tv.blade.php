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
        <legend>
            Soal 3
        </legend>
        @foreach($tv as $acara)
        <table>
            <tr>
                <td>Nama Stasiun TV</td>
                <td>:</td>
                <td>{{$acara['nama']}}</td>
            </tr>
            <tr>
                <td>Nama Acara</td>
                <td>:</td>
                <td>{{$acara['acara']}}</td>
            </tr>
            <tr>
                <td>Jadwal Tayang</td>
                <td>:</td>
                <td>{{$acara['waktu']}}</td>
            </tr>
            <tr>
                <td>Hari Tayang</td>
                <td>:</td>
                <td>{{$acara['hari']}}</td>
            </tr>
            <hr>
        </table>
        @endforeach
    </fieldset>
</body>
</html>