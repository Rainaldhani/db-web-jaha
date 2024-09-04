<?php

namespace App\Http\Controllers;

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
        $genres = Genres::all();
        return view('layout.admin', compact('genres'));
        // return view('partials.footer', compact('genres'));
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
}
