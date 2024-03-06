<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Programs;
class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $programs = Programs::get();

        return view('dashboard.programs', compact('programs'));
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
        
        
        $program = New Programs;
        $program -> venue = $request -> programvenue; 
        $program -> title = $request -> programtitle; 
        $program -> description = $request -> programdescription; 
        $program -> programdirection = $request -> programlocation; 
        $program -> eventdate = $request -> programdate; 
        $program -> save(); 
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

    public function activate(Request $request)
    {
        $id = $request->id;
        $store = Programs::find($id);
        $store -> status = 1;
        $store ->save();

        return $store;
    }
    public function deactivate(Request $request)
    {
        $id = $request->id;
        $store = Programs::find($id);
        $store -> status = 0;
        $store ->save();
    }
}
