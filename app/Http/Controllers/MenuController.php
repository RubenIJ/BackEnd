<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    // ==========================================
    // PUBLIEKE PAGINA (voor bezoekers)
    // ==========================================
    public function index()
    {
        $menuItems = Menu::all();
        return view('menu.index', compact('menuItems'));
    }

    // ==========================================
    // ADMIN PAGINA (alleen voor ingelogden)
    // ==========================================
    public function adminIndex()
    {
        $menuItems = Menu::all();
        return view('admin.menu', compact('menuItems'));
    }

    public function create()
    {
        return view('admin.menu-create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'        => 'required|string|max:255',
            'description' => 'nullable|string',
            'price'       => 'required|numeric|min:0',
        ]);

        Menu::create($request->only('name', 'description', 'price'));

        return redirect()->route('admin.menu')->with('success', 'Gerecht succesvol toegevoegd!');
    }

    public function edit(Menu $menu)
    {
        return view('admin.menu-edit', compact('menu'));
    }

    public function update(Request $request, Menu $menu)
    {
        $request->validate([
            'name'        => 'required|string|max:255',
            'description' => 'nullable|string',
            'price'       => 'required|numeric|min:0',
        ]);

        $menu->update($request->only('name', 'description', 'price'));

        return redirect()->route('admin.menu')->with('success', 'Gerecht succesvol bijgewerkt!');
    }

    public function destroy(Menu $menu)
    {
        $menu->delete();
        return redirect()->route('admin.menu')->with('success', 'Gerecht verwijderd!');
    }
}
