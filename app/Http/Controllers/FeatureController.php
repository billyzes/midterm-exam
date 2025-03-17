<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Models\Feature;


class FeatureController extends Controller
{
    public function index()
    {
        $data = Feature::all();

        return view('Feature')->with([
            'data' => $data
        ]);
    }
}
