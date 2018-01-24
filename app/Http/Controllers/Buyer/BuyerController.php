<?php

namespace App\Http\Controllers\Buyer;

use App\Buyer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BuyerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $buyers = Buyer::has('transactions')->get();

        if ($buyers)
        {
            return response()->json(['data' => $buyers], 200);
        }

        return response()->json(['error' => 'There are no buyers'], 404);

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $buyer = Buyer::has('transactions')->findOrFail($id);

        return response()->json(['data' => $buyer], 200);

    }

}
