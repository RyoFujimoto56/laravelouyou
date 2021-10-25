<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Author;

class HelloController extends Controller
{
    //indexメソッド
    public function index()
    {
        return view('index');
    }
    //eloquentメソッド
    public function store(Request $request)
{

$example = new Author();
 
$example->name;
$example->mail;
 
$example->save(all);
}
}
