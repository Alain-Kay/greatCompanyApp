<?php

namespace App\Http\Controllers\Offres;

use App\Http\Controllers\Controller;
use App\Models\OffresDemploies;
use App\Http\Requests\Admin\OfrresDemploiRequest;

class OffresDemploiController extends Controller
{
    public function index()
    {
        return view('admin.offres.index', [
            'offres' => OffresDemploies::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('admin.offres.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(OfrresDemploiRequest $request)
    {
        $offres = OffresDemploies::create(
            $request->validated());
            return to_route('admin.offres.index')->with('success', 'L\'article est sauvegardee');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(OffresDemploies $offre)
    {
        return view('admin.offres.edit', [
            'offre' => $offre
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(OfrresDemploiRequest $request, OffresDemploies $offre)
    {
        $offre->update($request->validated());
        return to_route('admin.offres.index')->with('success', 'L\'offre a ete modifiee');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OffresDemploies $offre)
    {
        $offre->delete();
        return to_route('admin.offres.index')->with('success', 'L\'offre a ete supprimee');
    }
}
