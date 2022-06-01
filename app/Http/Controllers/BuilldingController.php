<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BuilldingController extends Controller
{
    public function index()
    {
        $text = [
            'buillding' => '建物です',
        ];
        return view('index',$text);
    }
    public function number()
    {
        $number = [
            'room' => ''
        ];
        return view('部屋番号は' . $number . 'です');
    }
}
