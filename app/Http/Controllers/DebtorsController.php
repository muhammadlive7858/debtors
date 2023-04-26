<?php

namespace App\Http\Controllers;

use App\Models\debtors;
use Illuminate\Http\Request;

class DebtorsController extends Controller
{

    protected function __construct()
    {
        $this->middleware('auth:santum');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'msg'=> true,
            'data'=> debtors::where('user_id' , auth()->user()->id)
        ]);
    }

    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     */
    public function show(debtors $debtors)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(debtors $debtors)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, debtors $debtors)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(debtors $debtors)
    {
        //
    }
}
