<?php

namespace App\Http\Controllers;

use App\Models\Attachment;
use Illuminate\Http\Request;

class AttachmentController extends Controller
{
    public function index()
    {
        $attachments = Attachment::with('article')->get();
        return response()->json($attachments);
    }

    public function show($id)
    {
        $attachment = Attachment::findOrFail($id);
        return response()->json($attachment);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'article_id' => 'required|exists:articles,id',
            'file_path' => 'required|string',
        ]);

        $attachment = Attachment::create($validated);
        return response()->json($attachment, 201);
    }

    public function destroy($id)
    {
        $attachment = Attachment::findOrFail($id);
        $attachment->delete();
        return response()->json(['message' => 'Attachment deleted successfully']);
    }
}
