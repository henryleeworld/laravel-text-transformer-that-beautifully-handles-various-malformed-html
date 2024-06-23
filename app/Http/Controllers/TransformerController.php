<?php

namespace App\Http\Controllers;

use Stevebauman\Hypertext\Transformer;

class TransformerController extends Controller
{
    public function toText() 
    {
        echo (new Transformer)
             ->keepLinks()
             ->keepNewLines()
             ->toText(view('news')->render());
    }
}
