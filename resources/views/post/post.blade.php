<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../css/app.css">
</head>
<body>
@if($drink)
    <ul>
        <li>{{ $drink[0]->title }}</li>
        <li>{{ $drink[0]->cat }}</li>
        <li>{{ $drink[0]->keywords }}</li>
        {{ htmlspecialchars_decode(stripslashes($drink[0]->ingredients)) }}
    </ul>
@else
    <h1>Drink nicht gefunden</h1>
@endif
</body>
</html>




