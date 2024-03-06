<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de livros</title>
</head>
<body>
    <table border="1">
        <thead>
            <th>Título do livro</th>
            <th>Nome do autor</th>
            <th>Editora do livro</th>
        </thead>
        <tbody>
            @foreach ($books as $book)
                <tr>
                    <td>{{$book['title']}}</td>
                    <td>{{$book['author']}}</td>
                    <td>{{$book['publisher']}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
