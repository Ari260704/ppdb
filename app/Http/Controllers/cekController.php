<?php

namespace App\Http\Controllers;

use App\Models\cek;
use Illuminate\Http\Request;

class cekController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        //
        // dd('test');

        $data = Cek::where('nik', $request->nik)->first();
        if ($data) {
            return response()->json([
                'data' => $data // misal: "Lulus", "Tidak Lulus", dsb
            ]);
        } else {
            return response()->json([
                'data' => 'Data tidak ditemukan'
            ], 404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
