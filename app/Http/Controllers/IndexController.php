<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PesanModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use App\Models\LiveModel;

class IndexController extends Controller
{
    public function home(){
        $youtube = Http::get('https://www.googleapis.com/youtube/v3/channels?part=snippet,statistics&id=UCuWaoRaB3rB7A0ZiGH0uqNw&key=AIzaSyA6oZjyPvHLudeucr2Hnfb2fh2wheAczgk');
       $data = $youtube->json();
        return view('layouts.home.index',compact('data'));

    }

    public function about(){
        return view('layouts.home.about');
    }

    public function contact(){

        return view('layouts.home.contact');
    }
    public function project(){
        return view('layouts.home.project');
    }
    public function live(){
        $live = DB::table('live')->get();
        return view('layouts.home.livestream',compact('live'));
    }
    public function KirimPesan(Request $request){
        $pesan = PesanModel::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'pesan' => $request->pesan,
        ]);
        $pesan->save();
        return redirect()->route('contact')->with('pesan' , 'Selamat Pesan Anda Sudah Terkirim');
    }
}
