<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BooksController extends Controller
{
    public function store(Request $request)
    {
    	$data = request()->validate([
    		'title' => 'required',
    		'author' => 'required',
    	]);

    	Book::create($data);
    }

    public function update(Book $book)
    {
    	$data = request()->validate([
    		'title' => 'sometimes',
    		'author' => 'sometimes',
    	]);

    	$book->update($data);
    }
}
