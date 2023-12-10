<?php

namespace App\Http\Controllers;

use Exception;
use PDOException;
use App\Models\Pelanggan;
use App\Http\Requests\StorePelangganRequest;
use App\Http\Requests\UpdateJenisMakananRequest;
use Illuminate\Contracts\Cache\Store;

class PelangganController extends Controller
{
    public function index()
    {

        try {
            $data = Pelanggan::get();
            return response()->json(['status' => true, 'message' => 'success', 'data' => $data]);
        } catch (Exception | PDOException $e) {
            return response()->json(['status' => false, 'message' => 'gagal menampilkan data']);
        }
    }
    public function create()
    {
        //
    }
    public function store(StorePelangganRequest $request)
    {
        try {
            $data = Pelanggan::create($request->all());
            return response()->json(['status' => true, 'message' => ' input data success', 'data' => $data]);
        } catch (Exception | PDOException $e) {
            return response()->json(['status' => false, 'message' => 'gagal menampilkan data', 'error_type' => $e]);
        }
    }

    public function show(Pelanggan $pelanggan)
    {
        //
    }
    public function edit(Pelanggan $pelanggan)
    {
        //
    }
    public function update(StorePelangganRequest $request,  $pelanggan)
    {
        try {
            $pelanggan = Pelanggan::findOrFail($pelanggan);
            $data = $pelanggan->update($request->all());
            return response()->json(['status' => true, 'message' => ' update data sukses', 'data' => $data]);
        } catch (Exception | PDOException $e) {
            return response()->json(['status' => false, 'message' => 'gagal update data / data tidak ada']);
        }
    }
    public function destroy(Pelanggan $pelanggan)
    {
        try {
            $data = $pelanggan->delete();
            return response()->json(['status' => true, 'message' => ' delete data sukses', 'data' => $data]);
        } catch (Exception | PDOException $e) {
            return response()->json(['status' => false, 'message' => 'gagal menghapus data']);
        }
    }
}
