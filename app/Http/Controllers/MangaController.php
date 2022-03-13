<?php

namespace App\Http\Controllers;

use App\Models\Manga;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MangaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Manga';
        $mangas = Manga::latest()->where('enabled', true)->paginate(5);

        return view('public.index', compact('mangas', 'title'));
    }

    public function indexAdmin()
    {
        $title = 'Admin';
        if (Auth::user()->isAdmin) {
            $mangas = Manga::latest()->paginate(5);
            return view('admin.index', compact('mangas', 'title'));
        }

        return redirect()->back();
    }

    public function enableManga($id)
    {
        $manga = Manga::find($id);
        $manga->enabled = true;
        $manga->save();

        return redirect()->back();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create';
        return view('manga.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'judul' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'tema' => 'required',
            'status' => 'required',
            'image' => 'required',
            'ringkasan' => 'required',
        ]);

        $data['image'] = $request->file('image')->store('image');

        $manga = Manga::create($data);

        if ($manga) {
            return redirect()->route('manga');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $title = 'Detail';
        $manga = Manga::find($id);

        return view('manga.show', compact('manga', 'title'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = 'Edit';
        $manga = Manga::find($id);

        return view('manga.edit', compact('manga', 'title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'judul' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'tema' => 'required',
            'status' => 'required',
            'image' => 'required',
            'ringkasan' => 'required',
        ]);

        $data['image'] = $request->file('image')->store('image');

        $manga = Manga::where('id', $id)->update($data);

        if ($manga) {
            return redirect()->route('admin.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $manga = Manga::destroy($id);

        if ($manga) {
            return redirect()->route('admin.index');
        }
    }
}
