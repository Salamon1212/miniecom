<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>
        Hi @if (Auth::user()){{Auth::user()->name}}
        @else
            Dear
        @endif ,
            Happy to Say your order is confirmed,
        Additionally thank you for being CuCoo customer.
    </p>
</body>
</html>
