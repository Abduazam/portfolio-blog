<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\View\Factory;
use Illuminate\Http\Request;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class CategoryController extends HomeController
{
    public function index(): Factory|View|Application
    {
        $categories = Category::all();

        return view('admin.category.index', [
            'categories' => $categories
        ]);
    }

    public function create(): Factory|View|Application
    {
        return view('admin.category.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'title' => 'required',
        ]);

        Category::create([
            'title' => $request->input('title'),
        ]);

        return redirect()->route('category.index');
    }

    public function edit($id): Factory|View|Application
    {
        $category = Category::find($id);

        return view('admin.category.edit', [
            'category' => $category
        ]);
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $request->validate([
            'title' => 'required',
        ]);

        $category = Category::find($id);
        $category->update([
            'title' => $request->input('title'),
        ]);

        return redirect()->route('category.index');
    }

    public function destroy($id): RedirectResponse
    {
        $category = Category::find($id);
        if ($category->status === 1) {
            $category->status = 0;
        } else {
            $category->status = 1;
        }
        $category->save();

        return redirect()->route('category.index');
    }
}
