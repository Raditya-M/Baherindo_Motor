<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $motor = [
            ['id' => 1, 'name' => 'Aerox', 'price' => '25.000.000', 'tahun' => 2018, 'kilometer' => '100 km'],
            ['id' => 2, 'name' => 'Xmax', 'price' => '30.000.000', 'tahun' => 2020, 'kilometer' => '200 km'],
            ['id' => 3, 'name' => 'Nmax', 'price' => '26.000.000', 'tahun' => 2015, 'kilometer' => '140 km'],
            ['id' => 4, 'name' => 'Scoopy', 'price' => '20.000.000', 'tahun' => 2022, 'kilometer' => '180 km'],
            ['id' => 5, 'name' => 'Astrea Supra', 'price' => '16.000.000', 'tahun' => 2009, 'kilometer' => '110 km'],
            ['id' => 6, 'name' => 'Vespa', 'price' => '35.000.000', 'tahun' => 2024, 'kilometer' => '134 km']
        ];
        return view ('welcome', compact('motor'));
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
        //
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
