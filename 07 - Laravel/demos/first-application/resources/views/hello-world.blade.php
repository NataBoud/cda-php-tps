<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello world!</title>
</head>
<body>
    <h1>Wouhou, j'aime le monde.</h1>
    @if(isset($name))
        <p>{{$name}}</p>
    @else 
        <p>Pas de nom.</p>
    @endif
</body>
</html>