<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use App\Models\Contents;
use App\Models\Genres;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailables\Content;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        // Get all content
        $contents = Contents::all();
        

        $genres = Genres::all();
        return view('layout.admin', compact('genres', 'contents'));
        // return view('layout.admin', compact('genres'));

    }

    //showing to user
    public function users(){
        $contents = Contents::all();
        $genres = Genres::all();

        return view('layout.users', compact('genres', 'contents'));
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
        $imagePath = null;
        if ($request->hasFile('input-img')) {
            $file = $request->file('input-img');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('assets/media'), $filename);
            $imagePath = 'assets/media/' . $filename;
        }

        Contents::create([
            'name'=>$request->input('input-nama'),
            'img' => $imagePath,
        ]);
        return redirect()->back();
        //MODEL::AKSI([NAMA_KOLOM=>PARAMETER->INPUT('NAME_DI_HTMLNYA')])
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Get all content
        $contents = Contents::findOrFail($id);
        
        $genres = Genres::all();

        return view('layout.full_layout', compact('id', 'genres', 'contents'));
        // return view('layout.admin', compact('genres'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $imagePath = null;
        if ($request->hasFile('input-img')) {
            $file = $request->file('input-img');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('assets/media'), $filename);
            $imagePath = 'assets/media/' . $filename;
        }

        $contents = Contents::findOrFail($id);
        File::delete(public_path($contents->img));

        $contents->update([

            'name'=>$request->input('input-nama'),
            'img' => $imagePath,
        ]);

        return redirect()->route('content.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
        $content = Contents::findOrFail($id);
        $content->delete();

        File::delete(public_path($content->img));


        return redirect()->route('content.index');
    }
}
