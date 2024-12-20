<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'type' => 'required|string',
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'service' => 'required|string',
            'country' => 'required|string',
            'message' => 'string',
        ]);

        try {
            $additional = [
                'service' => $request->service,
                'country' => $request->country,
                'message' => $request->message,
                'url' => $request->header('referer'),
            ];

            Lead::create([
                'type' => $request->type,
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'additional' => $additional,
            ]);

            return response()->json([
                'status' => 'success',
                'message' => 'Form başarıyla gönderildi.'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Bir hata oluştu: ' . $e->getMessage()
            ], 500);
        }
    }
}
