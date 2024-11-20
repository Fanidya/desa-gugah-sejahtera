<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class VisiController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|unique:profiles,title',
            'description' => 'required'
        ]);

        Profile::create([
            ...$data,
            'type' => 'visi'
        ]);

        return back();
    }
}
