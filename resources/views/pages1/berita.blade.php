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
            Soal 1
        </legend>
        @foreach ($berita as $info)
        <ul>
        <li>{{$info['home']}}</li>
        <li>{{$info['berita']}}</li>
            <ul type="square">
                <li>{{$info['olahraga']}}</li>
            <ul type="circle">
                <li>{{$info['list']}}</li>
                <li>{{$info['list2']}}</li>
            </ul>
            </ul>
            <ul type="square">
                <li>{{$info['politik']}}</li>
            </ul>
            <ul type="square">
                <li>{{$info['manca']}}</li>
            </ul>
            <li>{{$info['about']}}</li>
        </ul>
        @endforeach
    </fieldset>
</body>
</html>