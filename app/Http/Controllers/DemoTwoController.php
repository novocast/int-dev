<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class DemoTwoController extends Controller
{
    public function index()
    {
        return response()->json([2,'3',true,'string']);
    }
}
