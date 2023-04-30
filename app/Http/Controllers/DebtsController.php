<?php

namespace App\Http\Controllers;

use App\Models\Debts;
use Illuminate\Http\Request;
use Auth;

class DebtsController extends Controller
{
    protected function __construct()
    {
        $this->middleware('auth:santum');
    }
    public function index()
    {
        $debts = Debts::where('user_id',Auth::user()->id)->get();
        return api_response($debts,"All debts",200);
    }
    public function store(Request $request)
    {
        $array = [
            'user_id' => Auth::user()->id,
            'debt_id' => $request->debt_id,
            'debt' => $request->debt,
            'backtime' => $request->backtime
        ];
        $store = Debts::create($request->input());
        return api_response($store,"Debt created",200);
    }
    public function show(Debts $debts)
    {
        
    }    
    public function update(Request $request, Debts $debts)
    {
        $debt = Debts::find($debts->id);
        if($debt){
            $array = [
                'user_id' => Auth::user()->id,
                'debt_id' => $request->debt_id,
                'debt' => $request->debt,
                'backtime' => $request->backtime
            ];
            $update = $debt::update($array);
            return api_response($update,"Debt updated",200);
        }
        return api_response($debt,"Debt not updated",500);
    }
    public function destroy(Debts $debts)
    {
        $debt = Debts::find($debts->id);
        if($debt){
            $delete = $debt::delete();
            return api_response($delete,"Debt deleted",200);
        }
        return api_response($debt,"Debt not deleted",500);
    }
}
