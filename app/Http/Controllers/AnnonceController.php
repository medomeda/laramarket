<?php

namespace App\Http\Controllers;

use App\Models\Annonce;
use Illuminate\Http\Request;

class AnnonceController extends Controller
{
    public function index()
    {
        $ads = Annonce::all();
        return view('annonces.index',compact('ads'));
    }

    public function create() {
        return view('annonces.create');
    }


    public function store(Request $request)
    {
        $annonce = Annonce::create($request->all());
        ProductPhoto::whereIn('id', explode(",", $request->file_ids))
            ->update(['product_id' => $product->id]);

        return redirect()->route('annonces.index')->with('success', 'Product saved successfully');
    }

    public function uploadSubmit(Request $request)
    {
        $photos = [];
        foreach ($request->photos as $photo) {
            $filename = $photo->store('photos');
            $product_photo = ProductPhoto::create([
                'filename' => $filename
            ]);

            $photo_object = new \stdClass();
            $photo_object->name = str_replace('photos/', '',$photo->getClientOriginalName());
            $photo_object->size = round(Storage::size($filename) / 1024, 2);
            $photo_object->fileID = $product_photo->id;
            $photos[] = $photo_object;
        }

        return response()->json(array('files' => $photos), 200);

    }
}
