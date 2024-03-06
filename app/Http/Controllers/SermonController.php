<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contents;
class SermonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $id = $request -> id;
        $content = Contents::where('id',  $id )->where('status', 1)->latest()->get();
        $contents = Contents::where('status', 1)->where('id', '!=',  $id)->latest()->get();
     return view('sermon', compact('content','contents'));
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
