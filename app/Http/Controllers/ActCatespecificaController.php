<?php

namespace App\Http\Controllers;

use App\Models\ActCatespecifica;
use Illuminate\Http\Request;

class ActCatespecificaController extends Controller
{
    //
    public function index(Request $request)
    {
        // $catespecifica = ActCatespecifica::all();
        $catespecifica = ActCatespecifica::find(411);
        $catespecifica->actcatgeneral;

        return response()->json($catespecifica);

    }
}
