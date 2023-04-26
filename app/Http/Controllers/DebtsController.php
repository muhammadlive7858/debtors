<?php

namespace App\Http\Controllers;

use App\Models\Debts;
use Illuminate\Http\Request;

class DebtsController extends Controller
{    public function store(Request $request)
    {
        $store = Debts::created($request->input());
    }
    public function show(Debts $debts)
    {
        
    }    public function update(Request $request, Debts $debts)
    {
        $debt = Debts::find($debts->id);
        if($debt){
            $update = $debt::update($request->input());

        }
    }
    public function destroy(Debts $debts)
    {
        $debt = Debts::find($debts->id);
        if($debt){
            $update = $debt::delete();
            
        }
    }
}
