<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Nilai;
use Illuminate\Support\Facades\DB;  

class NilaiController extends Controller
{

    public function create()
    {
        $user = User::select("id","name")->get();
        return view("admin/create",[
            "user" => $user
        ]);
    }

    public function store(Request $request)
    {
        if ($request->score>=90) {
            $grade = "A";
        }
        elseif($request->score>=80){
            $grade = "B";
        }
        elseif($request->score>=70){
            $grade="C";
        }
        else{
            $grade = "D";
        }

        $nilai=Nilai::create([
            "user_id" => $request->user,
            "nilaiagama" => $request->nilaiagama,
            "nilaimtk" => $request->nilaimtk,
            "nilaiindo" => $request->nilaiindo,
            "nilaieng" => $request->nilaieng,
            "nilaiipa" => $request->nilaiipa,
            "nilaiips" => $request->nilaiips,
            "nilaipkn" => $request->nilaipkn,
            "nilaiakhir" => $request->score,
            "grade" => $grade
        ]);
        $user=$request->user();
        return redirect()->to("/guru/".$nilai->user_id);
    }

    public function edit($user_id)
    {
        $guru=Nilai::find($user_id);
        $user = User::all();
        return view('admin/edit', compact('guru','user'));
    }

    public function update(Request $request, $user_id)
    {
        if ($request->score>=90) {
            $grade = "A";
        }
        elseif($request->score>=80){
            $grade = "B";
        }
        elseif($request->score>=70){
            $grade="C";
        }
        else{
            $grade = "D";
        }

          // update data siswa
          $nilai=Nilai::where("id",$user_id)->update([
            "user_id" => $request->user,
            "nilaiagama" => $request->nilaiagama,
            "nilaimtk" => $request->nilaimtk,
            "nilaiindo" => $request->nilaiindo,
            "nilaieng" => $request->nilaieng,
            "nilaiipa" => $request->nilaiipa,
            "nilaiips" => $request->nilaiips,
            "nilaipkn" => $request->nilaipkn,
            "nilaiakhir" => $request->score,
            'grade' => $grade
        ]);
            
        return redirect()->to("/guru/".$request->user);
    }

    // method untuk hapus data siswa
    public function hapus($user_id)
    {
        // menghapus data siswa berdasarkan id yang dipilih
        Nilai::where('id',$user_id)->delete();
        
        // alihkan halaman ke halaman siswa
        return redirect()->back();
    }
}