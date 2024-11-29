<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Gallery;
use App\Models\GalleryCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage; // Storage facade'ını ekleyin

class BeforeAfterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {
        $beforeAfter = Gallery::findBySlug($slug);

        if ($beforeAfter->status == 'published') {
            return view('front.layout.before-after-detail', compact('beforeAfter'));
        } else {
            abort(404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function categoryIndex(string $slug)
    {
        $category = GalleryCategory::findBySlug($slug);
        $categories = GalleryCategory::all();

        if ($category) {
            return view('front.layout.before-after-category', compact('category', 'categories'));
        } else {
            abort(404);
        }
    }
}
