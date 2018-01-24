<?php

namespace App\Http\Controllers\Seller;

use App\Seller;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SellerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $sellers = Seller::has('products')->get();

        if ($sellers)
        {
            return response()->json(['data' => $sellers], 200);
        }

        return response()->json(['error' => 'There are no sellers'], 404);
    }


    public function show($id)
    {
        //
        $seller = Seller::has('products')->findOrFail($id);


    }

}
