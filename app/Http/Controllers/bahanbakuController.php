<?php

namespace App\Http\Controllers;

use App\Models\bahanbaku;
use Illuminate\Http\Request;

class bahanbakuController extends Controller
{
    public function index()
    {
        $bahanbaku = bahanbaku::all();
        return view('bahanbaku',["bahanbaku"=>$bahanbaku]);
    }
}
