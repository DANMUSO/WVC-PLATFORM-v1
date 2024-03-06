<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Audio;
use App\Models\Contents;
use App\Models\Programs;
use App\Models\Visitors;
class TestimonyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $audio = Audio::latest()->get();
        return view('testimonies', compact('audio'));
    }

    public function welcome()
    {
        $contents = Contents::where('status', 1)->latest()->get();
        $programs = Programs::where('status', 1)->latest()->get();
        return view('welcome', compact('contents','programs'));
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

        $visitor = new Visitors;
        $visitor ->name = $request -> name;
        $visitor ->phone = $request -> phone_no;
        $visitor ->email = $request ->email;
        $visitor ->request = $request -> requesttyp;
        $visitor ->message = $request -> message;
        $visitor ->save();

        return redirect()->back();


        
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
