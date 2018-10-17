<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
</head>
<body>
        <ul class="list-group">
                @foreach ($drinks as $drink)
                        <li><a href="/drink/{{$drink->id}}">{{$drink->title}}</a></li>
                @endforeach
        </ul>
</body>
</html>