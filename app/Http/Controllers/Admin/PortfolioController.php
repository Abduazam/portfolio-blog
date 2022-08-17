<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Models\CatPort;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\Factory;
use Throwable;

class PortfolioController extends HomeController
{
    public function index(): Factory|View|Application
    {
        $portfolios = Portfolio::all();

        return view('admin.portfolio.index', [
            'portfolios' => $portfolios
        ]);
    }

    public function create(): Factory|View|Application
    {
        $categories = Category::where('id', '>', 1)->where('status', 1)->get();

        return view('admin.portfolio.create', [
            'categories' => $categories
        ]);
    }

    public function store(Request $request): Factory|View|Application|RedirectResponse
    {
        $request->validate([
           'title' => 'required',
           'text' => 'required',
            'img' => 'required|mimes:jpg,png,jpeg,gif',
            'cat_id' => 'required|array',
            'cat_id.*' => 'integer'
        ]);

        try {
            $newImageName = null;
            if (isset($request->img)) {
                $newImageName = time() . '.' . $request->img->extension();
                $request->img->move(public_path('images'), $newImageName);
            }

            $portfolio = new Portfolio();
            $portfolio->title = $request->input('title');
            $portfolio->img = $newImageName;
            $portfolio->text = $request->input('text');
            $portfolio->save();

            $arr = $request->cat_id;
            array_unshift($arr, 1);

            foreach ($arr as $id)
            {
                $cat_port = new CatPort();
                $cat_port->cat_id = $id;
                $cat_port->port_id = $portfolio->id;
                $cat_port->save();
            }

            return redirect()->route('portfolio.index');
        } catch (Throwable $e) {
            report($e);

            $categories = Category::where('id', '>', 1)->get();
            return view('admin.portfolio.create', [
                'categories' => $categories
            ]);
        }
    }

    public function show($id): Factory|View|Application
    {
        $portfolio = Portfolio::find($id);

        return view('admin.portfolio.show', [
            'portfolio' => $portfolio,
        ]);
    }

    public function edit($id): Factory|View|Application
    {
        $portfolio = Portfolio::find($id);
        $categories = Category::where('id', '>', 1)->where('status', 1)->get();

        return view('admin.portfolio.edit', [
            'portfolio' => $portfolio,
            'categories' => $categories
        ]);
    }

    public function update(Request $request, $id): Factory|View|Application|RedirectResponse
    {
        $request->validate([
            'title' => 'required',
            'text' => 'required',
            'img' => 'mimes:jpg,png,jpeg,gif',
            'cat_id' => 'required|array',
            'cat_id.*' => 'integer'
        ]);

        try {
            $portfolio = Portfolio::find($id);

            $newImageName = $portfolio->img;
            $file = 'images/' . $newImageName;
            if (isset($request->img)) {
                if($newImageName !== null && file_exists($file)){
                    unlink($file);
                }
                $newImageName = time() . '.' . $request->img->extension();
                $request->img->move(public_path('images'), $newImageName);
            }

            $portfolio->title = $request->input('title');
            $portfolio->img = $newImageName;
            $portfolio->text = $request->input('text');
            $portfolio->save();

            CatPort::where('port_id', $portfolio->id)->delete();

            $arr = $request->cat_id;
            array_unshift($arr, 1);

            foreach ($arr as $id)
            {
                $cat_port = new CatPort();
                $cat_port->cat_id = $id;
                $cat_port->port_id = $portfolio->id;
                $cat_port->save();
            }

            return redirect()->route('portfolio.index');
        } catch (Throwable $e) {
            report($e);

            $portfolio = Portfolio::find($id);
            $categories = Category::where('id', '>', 1)->get();
            return view('admin.portfolio.update', [
                'portfolio' => $portfolio,
                'categories' => $categories
            ]);
        }
    }

    public function destroy($id): RedirectResponse
    {
        $portfolio = Portfolio::find($id);
        if ($portfolio->status === 1) {
            $portfolio->status = 0;
        } else {
            $portfolio->status = 1;
        }
        $portfolio->save();

        return redirect()->route('portfolio.index');
    }
}
