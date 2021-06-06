<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Nilai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SiswaController extends Controller
{
    public function index()
    {
        $user_id = Auth::guard('web')->user()->id;
        $nilai = Nilai::join("users","users.id","nilai.user_id")->where("users.id",$user_id)->get();
        return view("siswa/siswa",[
            "nilai" => $nilai
        ]);
    }

    public function datasiswa()
    {
        $user = User::where('kelas','VII')->get();
        return view("admin/datasiswa",[
            "datasiswa" => $user
        ]);
    }

    public function datasiswa2()
    {
        $user = User::where('kelas','VIII')->get();
        return view("admin/datasiswa2",[
            "datasiswa2" => $user
        ]);
    }

    public function datasiswa3()
    {
        $user = User::where('kelas','IX')->get();
        return view("admin/datasiswa3",[
            "datasiswa3" => $user
        ]);
    }

    public function menu()
    {
        $user = User::all();
        return view("admin/menu");
    }
}