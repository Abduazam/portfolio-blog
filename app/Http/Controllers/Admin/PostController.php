<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\Factory;
use Throwable;

class PostController extends HomeController
{
    public function index(): View|Application
    {
        $posts = Post::all();
        return view('admin.post.index', [
            'posts' => $posts
        ]);
    }

    public function create(): Factory|View|Application
    {
        return view('admin.post.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'title' => 'required',
            'text' => 'required|min:50',
            'img' => 'mimes:jpg,png,jpeg,gif'
        ]);

        $newImageName = null;
        if (isset($request->img)) {
            $newImageName = time() . '.' . $request->img->extension();
            $request->img->move(public_path('images'), $newImageName);
        }

        Post::create([
            'title' => $request->input('title'),
            'text' => $request->input('text'),
            'img' => $newImageName
        ]);

        return redirect()->route('post.index');
    }

    public function show($id): Factory|View|Application
    {
        $post = Post::find($id);

        return view('admin.post.show', [
            'post' => $post
        ]);
    }

    public function edit($id): Factory|View|Application
    {
        $post = Post::find($id);

        return view('admin.post.edit', [
            'post' => $post
        ]);
    }

    public function update(Request $request, $id): Factory|View|Application|RedirectResponse
    {
        $request->validate([
            'title' => 'required',
            'text' => 'required|min:50',
            'img' => 'mimes:jpg,png,jpeg,gif'
        ]);

        $post = Post::find($id);

        try {
            $newImageName = $post->img;
            $file = 'images/' . $newImageName;
            if (isset($request->img)) {
                if($newImageName !== null && file_exists($file)){
                    unlink($file);
                }
                $newImageName = time() . '.' . $request->img->extension();
                $request->img->move(public_path('images'), $newImageName);
            }

            $post->update([
                'title' => $request->input('title'),
                'text' => $request->input('text'),
                'img' => $newImageName
            ]);

            return redirect()->route('post.show', ['post' => $post->id]);
        } catch (Throwable $e) {
            report($e);

            return view('admin.post.edit', [
                'post' => $post
            ]);
        }
    }

    public function destroy($id): RedirectResponse
    {
        $post = Post::find($id);
        if ($post->status === 1) {
            $post->status = 0;
        } else {
            $post->status = 1;
        }
        $post->save();

        return redirect()->route('post.index');
    }
}
