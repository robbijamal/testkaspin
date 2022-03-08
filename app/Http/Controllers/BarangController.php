<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Kreait\Laravel\Firebase\Facades\Firebase;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use Kreait\Firebase\Database;

class BarangController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
       
    }
    public function index(Request $request)
    {
        $data = Barang::all();
        
        return view('content.barang.index')->with([
            'data' => $data,
            
        ]);
    }
    public function create(Request $request)
    {
        
        return view('content.barang.create');
    }
    public function store(Request $request)
    {
        //dd(implode(",",$request->menu_id));
        $factory = (new Factory)->withServiceAccount(__DIR__.'/firebase_credentials.json');
        $firestore = $factory->createFirestore();
        $database = $firestore->database();
        $brgRef = $database->collection('LogBarang')->newDocument();

        $barang = new Barang;
        $barang->nama = $request->nama;
        $barang->harga = $request->harga;
        $barang->deskripsi = $request->deskripsi;
        //$role->menu_id = $request->menu_id;
        $barang->save();
        $brgRef->set([
            
            'nama'=>$request->nama,
            'harga' => $request->harga,
            'deskripsi' => $request->deskripsi,
            'status'=>"Insert",
            'by' => Auth::user()->name,
            'time' => date("Y-m-d H:i:s")
        ]);
       
        //dd($factory);
        
       // $brgRef = $database->collection('LogBarang')->newDocument();

        return redirect('/barang');
    }
    public function edit($id)
    {
        //dd($id);
        $data = Barang::findOrFail($id);
      
        return view('content.barang.edit')->with([
            'data' => $data,
        ]);
    }
    public function update(Request $request)
    {
        $factory = (new Factory)->withServiceAccount(__DIR__.'/firebase_credentials.json');
        $firestore = $factory->createFirestore();
        $database = $firestore->database();
        $brgRef = $database->collection('LogBarang')->newDocument();
        //dd(implode(",",$request->menu_id));
        $barang = Barang::find($request->barang_id);
        $barang->nama = $request->nama;
        $barang->harga = $request->harga;
        $barang->deskripsi = $request->deskripsi;
        //$role->menu_id = $request->menu_id;
        $barang->save();
        $brgRef->set([
            'nama'=>$barang->nama." ==> ".$request->nama,
            'harga' =>$barang->harga." ==> ".$request->harga,
            'deskripsi' =>$barang->deskripsi." ==> ".$request->deskripsi,
            'status'=>"Edit",
            'by' => Auth::user()->name,
            'time' => date("Y-m-d H:i:s")
        ]);

        return redirect('/barang');
    }
    public function destroy($id)
    {
        $factory = (new Factory)->withServiceAccount(__DIR__.'/firebase_credentials.json');
        $firestore = $factory->createFirestore();
        $database = $firestore->database();
        $brgRef = $database->collection('LogBarang')->newDocument();

    	$data = Barang::findOrFail($id);
    	$data->delete();

        $brgRef->set([
            'nama'=>$data->nama,
            'harga' =>$data->harga,
            'deskripsi' =>$data->deskripsi,
            'status'=>"Delete",
            'by' => Auth::user()->name,
            'time' => date("Y-m-d H:i:s")
        ]);
        return redirect('/barang');
    }
}
