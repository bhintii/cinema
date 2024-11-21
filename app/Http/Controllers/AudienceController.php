<?php

namespace App\Http\Controllers;

use App\Models\Audience;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AudienceController extends Controller
{
    public function index()
    {
        $audiences = Audience::with('ticket')->get();
        return response()->json($audiences);
    }
}