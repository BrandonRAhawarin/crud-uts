<?php

namespace App\Http\Controllers;

use App\Models\Laptop;
use Illuminate\Http\Request;

class LaptopController extends Controller
{
    public function index()
    {
        $laptops = Laptop::all();
        return view('laptops.index', compact('laptops'));
    }

    public function create()
    {
        return view('laptops.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required|numeric',
            'merek' => 'required',
        ]);

        Laptop::create($request->all());

        return redirect()->route('laptops.index')
            ->with('success', 'Laptop berhasil ditambahkan.');
    }

    public function show(Laptop $laptop)
    {
        return view('laptops.show', compact('laptop'));
    }

    public function edit(Laptop $laptop)
    {
        return view('laptops.edit', compact('laptop'));
    }

    public function update(Request $request, Laptop $laptop)
    {
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required|numeric',
            'merek' => 'required',
        ]);

        $laptop->update($request->all());

        return redirect()->route('laptops.index')
            ->with('success', 'Laptop berhasil diperbarui.');
    }

    public function destroy(Laptop $laptop)
    {
        $laptop->delete();

        return redirect()->route('laptops.index')
            ->with('success', 'Laptop berhasil dihapus.');
    }
}