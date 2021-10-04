<?php

namespace App\Http\Controllers\Api;

use App\Account;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $account = Account::where('id', $request->id)->first();
        return response()->json([$account]);
    }

    public function login(Request $request)
    {
        $account = Account::where('number', $request->account)->where('agency', $request->agency)->first();
        if (!empty($account->id)) {
            return response()->json(["account" => $account->id]);
        }
        return response()->json(["message" => "Conta não encontrada, Por favor confira os dados"]);
    }

    public function addCredit(Request $request)
    {
        $account = Account::where('id', $request->account)->first();
        $account->value = $account->value + $request->value;
        $account->save();
        return response()->json([$account]);
    }

    public function removeCredit(Request $request)
    {
        $account = Account::where('id', $request->account)->first();
        $account->value = $account->value - $request->value;
        $account->save();
        return response()->json([$account]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
