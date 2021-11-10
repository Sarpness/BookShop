<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function bookList(){
        $books = Book::all();

        return view('home', ['books' => $books,
        ]);
    }

    public function currentBook($id){
        $books = Book::all();
        return view('currentBook',['book' => $books->find($id)]);
    }
}
