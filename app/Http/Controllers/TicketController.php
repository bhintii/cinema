<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class TicketController extends Controller
{
    public function index()
    {
        $data = Ticket::get();
        return response()->json(['data' => $data], 200);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        // Validasi input menggunakan aturan dari model
        $validator = Validator::make($request->all(), Ticket::rules('insert'));

        if ($validator->fails()) {
            return response()->json(['message' => $validator->messages()], 400);
        }

        try {
            // Membuat tiket baru jika validasi berhasil
            $ticket = Ticket::create($request->all());

            return response()->json(['message' => 'Data berhasil disimpan', 'data' => $ticket], 200);
        } catch (\Throwable $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }
    public function show($id)
    {
        try {
            $data = Ticket::find($id);
            return response()->json(['data' => $data], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        try {
            $data = Ticket::find($id);
            
            return response()->json(['data' => $data], 200);
        } catch (\Throwable $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), Ticket::rules('update'));
        Ticket::customValidation($validator);

        if ($validator->fails()) {
            return response()->json(['message' => $validator->messages()], 400);
        }

        try {
            $data = Ticket::find($id);
            $data->update($request->all());
            return response()->json(['message' => 'Data berhasil diupdate','data' => $data], 200);
        } catch (\Throwable $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }

    }
     /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $data = Ticket::find($id);
            $data->delete();

            return response()->json(['message' => 'Data berhasil dihapus'], 200);
        } catch (\Throwable $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }
}
