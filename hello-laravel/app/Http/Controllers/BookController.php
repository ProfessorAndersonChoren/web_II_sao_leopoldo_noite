<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    function index(){
        $books = [
            [
                'title'=> 'Dom Casmurro',
                'author' => 'Machado de Assis',
                'publisher' => 'Editora Globo'
            ]
        ];
        return view('books',compact('books'));
    }
}
