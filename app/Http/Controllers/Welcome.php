<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Welcome extends Controller
{
    //
    public function Index()
    {
        return view('index', [
            'main' => 'main',
            'name' => 'Romer Jasen Jimenez',
            'age' => 21,
            'address' => 'Tabango, Leyte',
            'contact' => 200
        ]);
    }

    public function new()
    {
        return view('new', [
            'new' => 'new'
        ]);
    }

    public function exit()
    {
        return redirect()->route('welcome');
    }

    public function getId($id)
    {
        return 'New ' . $id;
    }
}
