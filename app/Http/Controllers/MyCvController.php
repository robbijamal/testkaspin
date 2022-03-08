<?php

namespace App\Http\Controllers;
use App\Models\Barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MyCvController extends Controller
{
    public function index()
    {
        return view('mycv');
    }
    public function welcome()
    {
        $data = Barang::all();
        return view('welcome')->with([
            'data' => $data,
            
        ]);
    }
}
