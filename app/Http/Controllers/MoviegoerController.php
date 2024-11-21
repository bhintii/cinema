<?php

namespace App\Http\Controllers;

use App\Models\Moviegoer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MoviegoerController extends Controller
{
    public function index()
    {
        $moviegoers = Moviegoer::with('ticket')->get();
        return response()->json($moviegoers);
    }
}