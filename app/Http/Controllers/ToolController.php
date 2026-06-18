<?php

namespace App\Http\Controllers;

use App\Models\Tool;

class ToolController extends Controller
{
    public function index()
    {
        $tools = Tool::all();
        return view('tools.index', compact('tools'));
    }

    public function show($slug)
    {
        $tool = Tool::where('slug', $slug)->firstOrFail();
        return view('tools.show', compact('tool'));
    }
}
