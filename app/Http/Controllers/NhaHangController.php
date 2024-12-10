<?php

namespace App\Http\Controllers;

use App\Models\NhaHang;
use Illuminate\Http\Request;

class NhaHangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listNhaHang = NhaHang::all();

        return view('admins.nhahangs.index', compact('listNhaHang'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admins.nhahangs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name'      => 'required',
            'logo'      => 'nullable|file|mimes:png,jpg,jpeg,gif',
            'location'  => 'required',
            'cuisine'   => 'required',
            'rating'    => 'required|numeric'      
        ]);

        //Xứ lí ảnh
        if ($request->hasFile('logo')) {
            $filePath = $request->file('logo')->store('uploads/nhaHangs', 'public');
        }else{
            $filePath = null;
        }

        $dataNhaHang = NhaHang::create([
            'name'     => $validateData['name'],
            'logo'     => $filePath,
            'location' => $validateData['location'],
            'cuisine'  => $validateData['cuisine'],
            'rating'   => $validateData['rating'],       
        ]);

        return redirect()->route('nhahangs.index');
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
        $nhaHang = NhaHang::FindorFail($id);

        $nhaHang->delete();

        return redirect()->route('nhahangs.index');
    }
}
