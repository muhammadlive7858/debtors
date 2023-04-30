<?php

namespace App\Http\Controllers;

use App\Models\debtors;
use Auth;
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
        $debtors = debtors::where('user_id' , Auth::user()->id);
        return api_response($debtors,"All debtors",200);
    }

    public function store(Request $request)
    {
        $array = [
            'debtor_name' =>$request->name,
            'phone'=>$request->phone,
            'desc'=>$request->desc,
            'user_id'=>Auth::user()->id  
        ];
        $store = debtors::create($array);
        return api_response($store,"Debtor create succesfully",200);
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
        $debtor = debtors::where('user_id',Auth::user()->id)->find($debtors->id);
        return api_response($debtor,"Edit debtor found",200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, debtors $debtors)
    {
        $debtor = debtors::where('user_id',Auth::user()->id)->find($debtors->id);
        $array = [
            'debtor_name' =>$request->name,
            'phone' =>$request->phone,
            'desc' =>$request->desc,
            'user_id' => Auth::user()->id
        ];
        $update = $debtor::update($array);
        return api_response($update,"Debtor updated succesfully",200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(debtors $debtors)
    {
        $debtor = debtors::where('user_id',Auth::user()->id)->find($debtors->id);
        $delete = $debtor::delete();
        return api_response($delete,"Debtor deleted succesfully",200);
    }
}
