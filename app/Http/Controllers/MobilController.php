<?php

namespace App\Http\Controllers;


use App\Models\MobilBaherindo;
use Illuminate\Auth\Events\Validated;
use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Http\Request;

class MobilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('mobil.create');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $mobil = MobilBaherindo::all();
        return view('welcome', compact('mobil'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama_mobil' => 'required|string',
            'harga_mobil' => 'required|numeric',
            'km_mobil' => 'required|integer',
            'tahun_mobil' => 'required|integer',
            'gambar_mobil' => 'image|mimes:jpeg,png,jpg,svg',
        ]);

        if ($request->hasFile('gambar_mobil')) {
            $path = $request->file('gambar_mobil')->store('mobilbaherindoImages', 'public');       
            $validateData['gambar_mobil'] = $path;
        }

        MobilBaherindo::create($validateData);
        return redirect('/-');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $mobil = MobilBaherindo::findOrFail($id);
        return view('mobil.show', compact('mobil'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $mobil = MobilBaherindo::findOrFail($id);
        return view('mobil.edit', compact('mobil'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $mobil = MobilBaherindo::findOrFail($id);

        $validateData = $request->validate([
            'nama_mobil' => 'required|string',
            'harga_mobil' => 'required|numeric',
            'km_mobil' => 'required|integer',
            'tahun_mobil' => 'required|integer',
            'gambar_mobil' => 'image|mimes:jpeg,png,jpg,svg',
        ]);

        if ($request->hasFile('gambar_mobil')) {
            $path = $request->file('gambar_mobil')->store('mobilbaherindoImages', 'public');       
            $validateData['gambar_mobil'] = $path;
        }

        $mobil->update($validateData);
        return redirect('/-');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $mobil = MobilBaherindo::findOrFail($id);
        $mobil->delete();
        return redirect('/-');
    }
}
