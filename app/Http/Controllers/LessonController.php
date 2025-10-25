<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    public function index(Course $course)
    {
        // Ambil semua lesson yang dimiliki oleh course ini
        $lessons = $course->lessons;

        // Kirim data course dan lessons ke view
        return view('admin.lessons.index', compact('course', 'lessons'));
    }

    // Di dalam LessonController.php

public function create(Course $course)
{
    return view('admin.lessons.create', compact('course'));
}

public function store(Request $request, Course $course)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'content' => 'required|string',
        'order' => 'required|integer',
    ]);

    $course->lessons()->create($request->all());

    return redirect()->route('admin.courses.lessons.index', $course->id)->with('success', 'Lesson created!');
}
}
