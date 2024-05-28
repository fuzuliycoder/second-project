<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.createfile');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $data = $request->all();
        $picture = $request->file('image');
        //$file = $request->input('file');
        $name = $picture->getClientOriginalName();
        $picture->move('admin/images', $name);
        $data['image'] = $name;
        //dd($data);
        Image::create($data);
        return redirect()->route('admin.dashboard');
    }
    public function showpic(){
            $images = Image::all();
            return view('admin.showpic', compact('images'));
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
