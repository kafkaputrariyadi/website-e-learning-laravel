<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    // ===============================================
    // FUNGSI UNTUK HALAMAN PUBLIK (SISWA)
    // ===============================================

    /**
     * Menampilkan daftar kursus untuk publik.
     */
    public function index()
    {
        $courses = Course::latest()->get();
        // PERBAIKI BARIS INI
        return view('public.courses.index', compact('courses'));
    }

    /**
     * Menampilkan detail satu kursus untuk publik.
     */
    public function show(Course $course)
    {
        // PERBAIKI BARIS INI
        return view('public.courses.show', compact('course'));
    }


    // ===============================================
    // FUNGSI UNTUK HALAMAN ADMIN (SUDAH BENAR)
    // ===============================================

    /**
     * Menampilkan daftar kursus di dashboard admin.
     */
    public function adminIndex()
    {
        $courses = Course::latest()->get();
        return view('admin.courses.index', compact('courses'));
    }

    /**
     * Menampilkan form untuk membuat kursus baru.
     */
    public function create()
    {
        return view('admin.courses.create');
    }

    /**
     * Menyimpan data kursus baru ke database.
     */
    public function store(Request $request)
    {
        $request->validate(['title' => 'required', 'description' => 'required']);
        Course::create($request->all());
        return redirect()->route('admin.courses.index')->with('success', 'Course created successfully!');
    }

    /**
     * Menampilkan form untuk mengedit kursus.
     */
    public function edit(Course $course)
    {
        return view('admin.courses.edit', compact('course'));
    }

    /**
     * Memperbarui data kursus di database.
     */
    public function update(Request $request, Course $course)
    {
        $request->validate(['title' => 'required', 'description' => 'required']);
        $course->update($request->all());
        return redirect()->route('admin.courses.index')->with('success', 'Course updated successfully!');
    }

    /**
     * Menghapus data kursus dari database.
     */
    public function destroy(Course $course)
    {
        $course->delete();
        return redirect()->route('admin.courses.index')->with('success', 'Course deleted successfully!');
    }
}