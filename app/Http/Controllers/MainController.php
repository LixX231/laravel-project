<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public int $a = 1;
    public int $b = 2;


    public function show1()
    {
        $a = $this->a;
        $b = $this->b;
        $products =['яйца', 'мука', 'молоко', 'сахар', 'разрыхлитель'];
        return view('second', compact('a', 'b', 'products'));
    }
}
