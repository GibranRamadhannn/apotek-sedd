<?php

namespace App\Http\Controllers;

use App\Models\Master\MasterDataRoleAccount;
use Illuminate\Http\Request;

class MasterDataRoleAccountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $role = MasterDataRoleAccount::all();
        return view('master.role', compact('role'));
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
        // Validasi input
        $validated = $request->validate([
            'role_name' => 'required|string|max:255',
            'status' => 'required|string|max:255',
        ]);

        // Simpan data ke database
        MasterDataRoleAccount::create($validated);

        // Redirect kembali ke halaman index
        return redirect()->route('master.role.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
