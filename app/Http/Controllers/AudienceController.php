<?php

namespace App\Http\Controllers;

use App\Models\Audience;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AudienceController extends Controller
{
    public function index()
    {
        // Mengambil semua produk beserta penulisnya
        $audiences = Audience::with('audience')->get();

        // Mengembalikan data dalam format JSON
        return response()->json($audiences);
    }

    public function store(Request $request)
    {
        // Validasi input menggunakan aturan dari model
        $validator = Validator::make($request->all(), Audience::rules('insert'));

        if ($validator->fails()) {
            return response()->json(['message' => $validator->messages()], 400);
        }

        try {
            // Membuat produk baru jika validasi berhasil
            $audiences = Audience::create($request->all());

            return response()->json(['message' => 'Data berhasil disimpan', 'data' => $audiences], 200);
        } catch (\Throwable $audiences) {
            return response()->json(['message' => $audiences->getMessage()], 500);
        }
    }
}