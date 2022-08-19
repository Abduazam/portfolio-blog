<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Portfolio;
use App\Models\Post;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\View;
use Illuminate\View\Factory;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(): Factory|View|Application
    {
        $portfolios = Portfolio::all();
        $portfolios = $portfolios->count();
        $categories = Category::all();
        $categories = $categories->count();
        $posts = Post::all();
        $posts = $posts->count();

        return view('admin.home.index', [
            'categories' => $categories,
            'portfolios' => $portfolios,
            'posts' => $posts
        ]);
    }
}
