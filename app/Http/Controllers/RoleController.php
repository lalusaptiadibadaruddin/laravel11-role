<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoleController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // $this->authorize('read role');
        // if (Gate::allows('read role')) {
        //     // abort(403, 'unouthorize');
        // }
        // if (Gate::authorize('read role')) {
        //     abort(403, 'unouthorize');
        // }

        return view('konfigurasi.role');

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return 'create role page';
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
