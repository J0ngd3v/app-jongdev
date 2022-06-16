<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\PesanModel;
use App\Models\LiveModel;

class DashboardController extends Controller
{
    public function AdminHome(){
        $users = DB::table('users')->count();
        $pesan = DB::table('pesan')->count();
        $youtube = DB::table('live')->count();
        return view('layouts.admin.index' , compact('users','pesan','youtube'));
    }
    public function ViewUser(){
        $users = DB::table('users')->get();
        return view('layouts.admin.viewuser', compact('users'));
    }
    public function AddUser(){
        return view('layouts.admin.adduser');
    }
    public function DeleteUser($id){
        DB::delete('delete from users where id = ?',[$id]);
        return redirect()->route('viewuser');
    }
    public function TambahUser(Request $request){
        $user = User::create(
            [
                'name' => $request->name,
                'email'=> $request->email,
                'password' => $request->password
            ]
            );

        $user->save();
        return redirect()->route('viewuser');
    }
    public function ViewPesan(){
        $pesan = DB::table('pesan')->get();
        return view('layouts.admin.viewpesan' , compact('pesan'));
    }
    public function DeletePesan($id){
        DB::delete('delete from pesan where id = ?',[$id]);
        return redirect()->route('viewpesan');
    }

    public function YoutubeView(){
        $youtube = DB::table('live')->get();
        return view('layouts.admin.viewyoutube', compact('youtube'));
    }
    public function YoutubeTambah(){
        return view('layouts.admin.addyoutube');
    }
    public function YoutubeUpload(Request $request){
        $youtube = LiveModel::Create(
            [
                'judul' => $request->judul,
                'url' => $request->url
            ]
            );
        
        $youtube->save();
        return redirect()->route('youtube');
    }
    public function YoutubeDelete($id){
        DB::delete('delete from live where id = ?',[$id]);
        return redirect()->route('youtube');
    }
   
}
