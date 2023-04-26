<?php

namespace App\Http\Controllers;

use App\Models\debtors;
use Illuminate\Http\Request;

class DebtorsController extends Controller
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
        $store = Debtors::created($request->input());
        if($store)
        {   

            return response()->json("Debtor create");
        }
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
