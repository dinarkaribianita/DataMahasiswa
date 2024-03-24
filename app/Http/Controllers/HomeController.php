<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa; // Import model Mahasiswa jika belum diimpor

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $mahasiswas = Mahasiswa::when($request->keyword, function ($query) use ($request) {
                $query->where('nama','like','%'.$request->keyword.'%');
            })
            ->orderByDesc('nim')
            ->paginate(10);

        return view('home', [
            'mahasiswas' => $mahasiswas,
            'keyword' => $request->keyword,
            'jmlMahasiswa' => Mahasiswa::count(),
            'countLaki' => Mahasiswa::where('gender', 'laki-laki')->count(),
            'countPerempuan' => Mahasiswa::where('gender', 'perempuan')->count(),
        ]);
    }

}
