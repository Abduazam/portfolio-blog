<?php

namespace App\Http\Controllers\Admin;

use App\Models\Course;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\Factory;
use Throwable;

class CourseController extends HomeController
{
    public function index(): View|Application
    {
        $courses = Course::all();
        return view('admin.course.index', [
            'courses' => $courses
        ]);
    }

    public function create(): Factory|View|Application
    {
        return view('admin.course.create');
    }

    public function store(Request $request): Factory|View|Application|RedirectResponse
    {
        $request->validate([
            'title' => 'required',
            'text' => 'required|min:50',
            'link' => 'required',
            'img' => 'required|mimes:jpg,png,jpeg,gif',
        ]);

        try {
            $newImageName = null;
            if (isset($request->img)) {
                $newImageName = time() . '.' . $request->img->extension();
                $request->img->move(public_path('images'), $newImageName);
            }

            $course = new Course();
            $course->title = $request->input('title');
            $course->img = $newImageName;
            $course->text = $request->input('text');
            $course->link = $request->input('link');
            $course->save();

            return redirect()->route('course.index');
        } catch (Throwable $e) {
            report($e);

            return view('admin.course.create');
        }
    }

    public function show($id): Factory|View|Application
    {
        $course = Course::find($id);

        return view('admin.course.show', [
            'course' => $course,
        ]);
    }

    public function edit($id): Factory|View|Application
    {
        $course = Course::find($id);

        return view('admin.course.edit', [
            'course' => $course,
        ]);
    }

    public function update(Request $request, $id): Factory|View|Application|RedirectResponse
    {
        $request->validate([
            'title' => 'required',
            'text' => 'required|min:50',
            'link' => 'required',
            'img' => 'mimes:jpg,png,jpeg,gif',
        ]);

        $course = Course::find($id);

        try {
            $newImageName = $course->img;
            $file = 'images/' . $newImageName;
            if (isset($request->img)) {
                if($newImageName !== null && file_exists($file)){
                    unlink($file);
                }
                $newImageName = time() . '.' . $request->img->extension();
                $request->img->move(public_path('images'), $newImageName);
            }

            $course->title = $request->input('title');
            $course->img = $newImageName;
            $course->text = $request->input('text');
            $course->link = $request->input('link');
            $course->save();

            return redirect()->route('course.show', ['course' => $course->id]);
        } catch (Throwable $e) {
            report($e);

            return view('admin.course.edit', [
                'course' => $course
            ]);
        }
    }

    public function destroy($id): RedirectResponse
    {
        $course = Course::find($id);
        if ($course->status === 1) {
            $course->status = 0;
        } else {
            $course->status = 1;
        }
        $course->save();

        return redirect()->route('course.index');
    }
}
