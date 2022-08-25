<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Portfolio;
use App\Models\Post;
use App\Models\Course;
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
        $courses = Course::where('status', 1)->get();

        return view('site.course', [
            'courses' => $courses
        ]);
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
        if (!empty($portfolio) && isset($portfolio)) {
            return view('site.project', [
                'portfolio' => $portfolio,
            ]);
        } else {
            return abort(404);
        }

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
        if (!empty($post) && isset($post)) {
            ++$post->view;
            $post->save();

            return view('site.article', [
                'post' => $post,
            ]);
        } else {
            return abort(404);
        }
    }
}
