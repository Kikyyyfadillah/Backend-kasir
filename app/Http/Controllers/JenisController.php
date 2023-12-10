<?php

namespace App\Http\Controllers;

use Exception;
use PDOException;
use App\Models\Jenis;
use App\Http\Requests\StoreJenisRequest;

class JenisController extends Controller
{
    public function index()
    {
        try {
            $data = Jenis::get();
            return response()->json(['status' => true, 'message' => 'success', 'data' => $data]);
        } catch (Exception | PDOException $e) {
            return response()->json(['status' => false, 'message' => 'gagal menampilkan data']);
        }
    }

    public function create()
    {
        //
    }
    public function store(StoreJenisRequest $request)
    {
        try {
            $data = Jenis::create($request->all());
            return response()->json(['status' => true, 'message' => ' input data success', 'data' => $data]);
        } catch (Exception | PDOException $e) {
            return response()->json(['status' => false, 'message' => 'gagal menampilkan data', 'error_type' => $e]);
        }
    }
    public function show(Jenis $jeni)
    {
        //
    }
    public function edit(Jenis $jeni)
    {
        //
    }
    public function update(StoreJenisRequest $request, Jenis $jeni)
    {
        try {
            $data = $jeni->update($request->all());
            return response()->json(['status' => true, 'message' => ' update data sukses', 'data' => $data]);
        } catch (Exception | PDOException $e) {
            return response()->json(['status' => false, 'message' => 'gagal update data']);
        }
    }
    public function destroy(Jenis $jeni)
    {
        try {
            $data = $jeni->delete();
            return response()->json(['status' => true, 'message' => ' delete data sukses', 'data' => $data]);
        } catch (Exception | PDOException $e) {
            return response()->json(['status' => false, 'message' => 'gagal menghapus data']);
        }
    }
}
