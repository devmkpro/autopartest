<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Part;

class PartController extends Controller
{
    public function index()
    {
        $parts = Part::select('uuid', 'name', 'description', 'price')->simplepaginate(12);
        if (count($parts->items()) === 0) {
            return redirect()->route('catalog.index');
        }
        return view('pages.catalog', compact('parts'));
    }

    public function details(Part $part)
    {
        return view('pages.part-details', compact('part'));
    }
}
