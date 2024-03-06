<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Página inicial</title>
</head>

<body>
    @if (empty($name))
        <h1>Hello, Anonymous</h1>
    @else
        <h1>Hello, {{ $name }}!!!</h1>
    @endif;
</body>

</html>
