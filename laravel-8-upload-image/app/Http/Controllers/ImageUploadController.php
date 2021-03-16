<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class ImageUploadController extends Controller
{
    //
    public function show()
    {
        return view('image_upload');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function upload_post_image(Request $request)
    {

        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $imageName = time() . $file->getClientOriginalName();
            $filePath = 'images/' . $imageName;
            Storage::disk('minio')->put($filePath, file_get_contents($file));

            return back()->with('success', 'You have successfully upload image.');
        }
    }
}
