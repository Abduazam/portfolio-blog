<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Portfolio;
use App\Models\Post;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\View\Factory;

class SiteController extends Controller
{
    public function index(): Factory|View|Application
    {
        return view('site.index');
    }

    public function about(): Factory|View|Application
    {
        return view('site.about');
    }

    public function course(): Factory|View|Application
    {
        return view('site.course');
    }

    public function portfolio(): Factory|View|Application
    {
        $categories = Category::where('status', 1)->get();

        return view('site.portfolio', [
            'categories' => $categories
        ]);
    }

    public function project($id): Factory|View|Application
    {
        $portfolio = Portfolio::find($id);

        return view('site.project', [
            'portfolio' => $portfolio,
        ]);
    }

    public function blog(): Factory|View|Application
    {
        $posts = Post::where('status', 1)->get();

        return view('site.blog', [
            'posts' => $posts
        ]);
    }

    public function article($id): Factory|View|Application
    {
        $post = Post::find($id);
        ++$post->view;
        $post->save();

        return view('site.article', [
            'post' => $post,
        ]);
    }
}
