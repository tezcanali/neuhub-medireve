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

    public function apiCreate(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string',
            'category_id' => 'required',
            'featured_image' => 'required|string',
            'images' => 'required|array',
            'status' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        }

        // Öne çıkan görseli yükle
        $featuredImage = $request->featured_image;
        $featuredImageName = time() . '.png'; // Dosya adını belirle
        $this->saveBase64Image($featuredImage, $featuredImageName, 'galleries');

        // Diğer görselleri yükle
        $images = [];
        foreach ($request->images as $imageData) {
            $image = $imageData['image'];
            $imageName = time() . '_' . uniqid() . '.png'; // Dosya adını belirle
            $this->saveBase64Image($image, $imageName, 'galleries');

            // İstenilen formatta diziye ekle
            $images[] = ['image' => 'galleries/' . $imageName]; // İstenilen formatta ekleme
        }

        $beforeAfter = new Gallery;
        $beforeAfter->title = $request->title;
        $beforeAfter->category_id = $request->category_id;
        $beforeAfter->featured_image = 'galleries/' . $featuredImageName;
        $beforeAfter->images = $images; // Değişiklik: JSON formatında kaydetmeye gerek yok
        $beforeAfter->status = $request->status;
        $beforeAfter->save();

        return response()->json(['success' => 'Başarıyla oluşturuldu'], 200);
    }

    private function saveBase64Image($base64String, $fileName, $directory)
    {
        // Base64 string'i çöz ve dosyayı kaydet
        $image = str_replace('data:image/png;base64,', '', $base64String);
        $image = str_replace(' ', '+', $image);

        // Storage kullanarak dosyayı kaydet
        Storage::disk('public')->put($directory . '/' . $fileName, base64_decode($image));
    }
}
