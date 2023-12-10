<?php

namespace App\Http\Controllers;

use Exception;
use PDOException;
use App\Models\Pemesanan;
use App\Http\Requests\StorePemesananRequest;
use App\Http\Requests\UpdatePemesananRequest;

class PemesananController extends Controller
{
    public function index()
    {
        try {
            $data = Pemesanan::get();
            return response()->json(['status' => true, 'message' => 'success', 'data' => $data]);
        } catch (Exception | PDOException $e) {
            return response()->json(['status' => false, 'message' => 'gagal menampilkan data']);
        }
    }
    public function create()
    {
        //
    }
    public function store(StorePemesananRequest $request)
    {
        try {
            $data = Pemesanan::create($request->all());
            return response()->json(['status' => true, 'message' => ' input data success', 'data' => $data]);
        } catch (Exception | PDOException $e) {
            return response()->json(['status' => false, 'message' => 'gagal menampilkan data', 'error_type' => $e]);
        }
    }
    public function show(Pemesanan $pemesanan)
    {
        //
    }
    public function edit(Pemesanan $pemesanan)
    {
        //
    }
    public function update(StorePemesananRequest $request, $pemesanan)
    {
        try {
            $pemesanan = Pemesanan::findOrFail($pemesanan);
            $data = $pemesanan->update($request->all());
            return response()->json(['status' => true, 'message' => ' update data sukses', 'data' => $data]);
        } catch (Exception | PDOException $e) {
            return response()->json(['status' => false, 'message' => 'gagal update data / data tidak ada']);
        }
    }
    public function destroy(Pemesanan $pemesanan)
    {
        try {
            $data = $pemesanan->delete();
            return response()->json(['status' => true, 'message' => ' delete data sukses', 'data' => $data]);
        } catch (Exception | PDOException $e) {
            return response()->json(['status' => false, 'message' => 'gagal menghapus data']);
        }
    }
}
