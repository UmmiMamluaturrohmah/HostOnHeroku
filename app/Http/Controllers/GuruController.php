<?php

namespace App\Http\Controllers;

use App\Models\Nilai;
use Illuminate\Http\Request;
use Auth;

class GuruController extends Controller
{
    public function index($id)
    {
        $nilai = Nilai::join("users","users.id","nilai.user_id")
                ->where("nilai.user_id",$id)
                ->select("nilai.id","nilai.nilaiagama","nilai.nilaimtk"
                ,"nilai.nilaiindo","nilai.nilaieng","nilai.nilaiipa",
                "nilai.nilaiips","nilai.nilaipkn","nilai.nilaiakhir","nilai.grade","users.name")->get();
        return view("admin/guru",[
            "nilai" => $nilai
        ]);
    }
}
  