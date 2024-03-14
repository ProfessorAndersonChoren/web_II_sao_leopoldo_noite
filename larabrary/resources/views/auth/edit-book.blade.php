@extends('layouts.dashboard')

@section('main-content')
    <h1 class="mb-8 text-6xl text-center text-red-950">Editar o livro NOME DO LIVRO</h1>
    <form action="#" method="post" class="flex flex-col w-full">
        <label for="isbn" class="custom-label">ISBN do livro:</label>
        <input type="text" id="isbn" name="isbn" class="mb-6 custom-input" value="0-1541-3464-3" readonly>
        <label for="title" class="custom-label">Nome do livro:</label>
        <input type="text" id="title" name="title" class="mb-6 custom-input" value="Nome do livro vai aqui"
            required>
        <label for="author" class="custom-label">Autor do livro:</label>
        <input type="text" id="author" name="author" class="mb-6 custom-input" value="Nome do autor vai aqui"
            required>
        <label for="publisher" class="custom-label">Nome da editora:</label>
        <input type="text" id="publisher" name="publisher" class="mb-6 custom-input" value="Nome da editora vai aqui"
            required>
        <label for="pages" class="custom-label">Número de paginas:</label>
        <input type="number" id="pages" name="pages" class="mb-6 custom-input" required min="1"
            value="1">
        <button type="submit" class="flex items-center justify-center gap-2 custom-button green-button">
            <img src="/imgs/add.svg" alt="Save icon" width="24px">
            <span class="text-base font-bold">Salvar</span>
        </button>
    </form>
@endsection
