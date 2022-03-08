<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Laravel\Firebase\Facades\Firebase;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use Kreait\Firebase\Database;

class LogBarangController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        $factory = (new Factory)->withServiceAccount(__DIR__.'/firebase_credentials.json');
        //dd($factory);
        $firestore = $factory->createFirestore();
        $database = $firestore->database();
       // $brgRef = $database->collection('LogBarang')->newDocument();
       $brgRef = $database->collection('LogBarang');

       $query = $brgRef->orderBy('time','desc');
       $documents = $query->documents();  
       //$data = array();
        /*foreach($documents as $stu) {  
        if($stu->exists()){  
         print_r('Barang ID = '.$stu->id());  
         print_r('Barang Name = '.$stu->data()['nama']);  
            }  
        } */ 
        return view('content.logbarang.index')->with([
            'data' => $documents,
            
        ]);
        /*$brgRef->set([
            'nama'=>"HP SAMSUNG RW23",
            'harga' => "1200",
            'deskripsi' => "Barang Ori",
            'status'=>"Insert",
            'by' => "Robbi"
        ]);*/
    }
}
