<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Sale;
use \App\Http\Resources\SaleResource;

class SalesController extends Controller
{
    public function getSaleById($id)
    {
        $sales = Sale::with('client')->with('details')->find($id);
        if ( $sales ) {
            $sales = new SaleResource($sales);

            return response()->json($sales, 200, [], JSON_NUMERIC_CHECK);
        } else {
            $sales = ['error' => true, 'message' => 'ID not found'];

            return response()->json($sales, 404);
        }
    }
}
