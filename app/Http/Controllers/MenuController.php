<?php

namespace App\Http\Controllers;

use Exception;
use PDOException;
use App\Models\Menu;
use App\Http\Requests\StoreMenuRequest;
use App\Http\Requests\UpdateJenisMakananRequest;
use Illuminate\Contracts\Cache\Store;

class MenuController extends Controller
{
    public function index()
    {
        try {
            $data = Menu::get();
            return response()->json(['status' => true, 'message' => 'success', 'data' => $data]);
        } catch (Exception | PDOException $e) {
            return response()->json(['status' => false, 'message' => 'gagal menampilkan data']);
        }
    }
    public function create()
    {
        //
    }
    public function store(StoreMenuRequest $request)
    {
        try {
            $data = Menu::create($request->all());
            return response()->json(['status' => true, 'message' => ' input data success', 'data' => $data]);
        } catch (Exception | PDOException $e) {
            return response()->json(['status' => false, 'message' => 'gagal menampilkan data', 'error_type' => $e]);
        }
    }
    public function show(Menu $menu)
    {
        //
    }
    public function edit(Menu $menu)
    {
        //
    }
    public function update(StoreMenuRequest $request, Menu $menu)
    {
        try {
            $data = $menu->update($request->all());
            return response()->json(['status' => true, 'message' => ' update data sukses', 'data' => $data]);
        } catch (Exception | PDOException $e) {
            return response()->json(['status' => false, 'message' => 'gagal update data']);
        }
    }
    public function destroy(Menu $menu)
    {
        try {
            $data = $menu->delete();
            return response()->json(['status' => true, 'message' => ' delete data sukses', 'data' => $data]);
        } catch (Exception | PDOException $e) {
            return response()->json(['status' => false, 'message' => 'gagal menghapus data']);
        }
    }
}