<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class DemoTwoController extends Controller
{
    public function index()
    {
      return response()->json([2,'3',true,'string']);
    }
}
