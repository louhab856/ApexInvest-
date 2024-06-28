<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InvestmentPackage;
use App\Models\User;

class InvestmentController extends Controller
{
    public function index()
    {
        $packages = InvestmentPackage::all();
        return response()->json(['packages' => $packages], 200);
    }

    public function invest(Request $request)
    {
        $user = auth()->user();
        // Implement investment logic based on request input
        return response()->json(['message' => 'Investment successful'], 200);
    }
}

