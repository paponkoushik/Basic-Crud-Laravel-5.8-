<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function create()
    {
        return view('createStudent');
    }

    public function store(Request $request, Response $response)
    {
        return $request->all();
    }
}
