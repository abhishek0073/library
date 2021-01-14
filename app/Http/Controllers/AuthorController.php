<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;

class AuthorController extends Controller
{
    public function store(Request $request)
    {
    	$data = request()->validate([
    		'name' => 'required',
    		'dob' => 'required',
    	]);

    	$book = Author::create($data);

    }
}
