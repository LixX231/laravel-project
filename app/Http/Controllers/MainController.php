<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class MainController extends Controller
{
    public array $products = [
        ['id' => 1, 'title' => 'Котик 1', 'price' => 250, 'path' => 'pict1.jpg'],
        ['id' => 2, 'title' => 'Котик 2', 'price' => 8500, 'path' => 'pict2.jpg'],
        ['id' => 3, 'title' => 'Котик 3', 'price' => 650, 'path' => 'pict3.jpg'],
        ['id' => 4, 'title' => 'Котик 4', 'price' => 120, 'path' => 'pict4.jpg'],
        ['id' => 5, 'title' => 'Котик 5', 'price' => 180, 'path' => 'pict5.jpg'],
        ['id' => 6, 'title' => 'Котик 6', 'price' => 4500, 'path' => 'pict6.jpg'],
        ['id' => 7, 'title' => 'Котик 7', 'price' => 3200, 'path' => 'pict7.jpg'],
        ['id' => 8, 'title' => 'Котик 8', 'price' => 800, 'path' => 'pict8.jpg'],
    ];

    public function showIndex(): View
    {
        return view('home');
    }

    public function showArray(): View
    {
        return view('array', ['array' => $this->products]);
    }

    public function shuffleArray() {
        return view('array', [
            'array' => collect($this->products)->shuffle()->values()->all()
        ]);
    }

    public function sortArray() {
        return view('array', [
            'array' => collect($this->products)->sortBy('price')->values()->all()
        ]);
    }

    public function filterArray() {
        return view('array', [
            'array' => collect($this->products)->where('price', '>', 1000)->values()->all()
        ]);
    }
}