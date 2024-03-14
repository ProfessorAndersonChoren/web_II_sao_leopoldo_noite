@extends('layouts.dashboard')

@section('main-content')
    <h1 class="text-6xl text-center text-red-950">Cadastrar novo livro</h1>
    <form action="#" method="post" class="flex flex-col w-full">
        <label for="isbn" class="custom-label">ISBN do livro:</label>
        <input type="text" id="isbn" name="isbn" class="mb-6 custom-input" required minlength="13" maxlength="17">
        <label for="title" class="custom-label">Nome do livro:</label>
        <input type="text" id="title" name="title" class="mb-6 custom-input" required minlength="3">
        <label for="author" class="custom-label">Autor do livro:</label>
        <input type="text" id="author" name="author" class="mb-6 custom-input" required minlength="3">
        <label for="publisher" class="custom-label">Nome da editora:</label>
        <input type="text" id="publisher" name="publisher" class="mb-6 custom-input" required>
        <label for="pages" class="custom-label">Número de paginas:</label>
        <input type="number" id="pages" name="pages" class="mb-6 custom-input" required min="1">
        <button type="submit" class="flex items-center justify-center gap-2 custom-button green-button">
            <img src="/imgs/add.svg" alt="Save icon" width="24px">
            <span class="text-base font-bold">Salvar</span>
        </button>
    </form>
@endsection
