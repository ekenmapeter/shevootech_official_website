<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Product;
use App\Models\Project;
use App\Models\Service;
use App\Models\Tool;

class HomeController extends Controller
{
    public function index()
    {
        $services = Service::all();
        $projects = Project::latest()->take(6)->get();
        $products = Product::where('is_active', true)->latest()->take(6)->get();
        $tools = Tool::where('is_free', true)->latest()->take(6)->get();
        $posts = Post::published()->latest('published_at')->take(3)->get();

        return view('home', compact('services', 'projects', 'products', 'tools', 'posts'));
    }
}
