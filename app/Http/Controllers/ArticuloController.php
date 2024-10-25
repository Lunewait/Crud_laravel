<?php

namespace App\Http\Controllers;

use App\Models\Articulo;
use App\Http\Requests\ArticuloRequest;
use Illuminate\Http\Request;

class ArticuloController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $articulos = Articulo::all();
        return view('articulos.index', compact('articulos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('articulos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ArticuloRequest $request)
    {
        //
         // Usamos el método validated() porque estamos inyectando ArticuloRequest
        Articulo::create($request->validated());
        return redirect()->route('articulos.index')->with('success', 'Artículo creado con éxito.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Articulo $articulo)
    {
        //
        return view('articulos.show', compact('articulo'));
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Articulo $articulo)
    {
        //
        return view('articulos.edit', compact('articulo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ArticuloRequest $request, Articulo $articulo)
    {
        //
       // Usamos el método validated() porque estamos inyectando ArticuloRequest
    $articulo->update($request->validated());

    return redirect()->route('articulos.index')->with('success', 'Artículo actualizado con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Articulo $articulo)
    {
        //
        $articulo->delete();
        return redirect()->route('articulos.index')->with('success', 'Artículo eliminado con éxito.');
    }
}
