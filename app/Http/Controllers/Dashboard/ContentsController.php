<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contents;
use Intervention\Image\ImageManagerStatic as Image;
class ContentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contents = Contents::latest()->get();
        return view('dashboard/contents', compact('contents'));
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
        $store = new Contents;
        $store -> title = $request->videotitle;
        $store -> description = $request->videodesc;
        $store -> url = $request->videourl;
        $store -> language = $request->videolanguage;
        $store -> status = '0';
        $store -> live = $request->videolive;
        $store -> pastor_id = $request-> pastor_id;
        $store -> location = $request-> videovenue;
        $store ->save();

        return $store;
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
     
        $content = Contents::where('id',$request->id )->get();
        return view('dashboard.content_form', compact('content'));
        

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
    public function update(Request $request)
    {
        $id = $request->vid;
        $store = Contents::find($id);
        $store -> title = $request->vtitle;
        $store -> description = $request->vdesc;
        $store -> url = $request->vurl;
        $store -> language = $request->vlanguage;
        $store -> live = $request->vlive;
        $store -> pastor_id = $request-> vpastor_id;
        $store -> location = $request-> vvenue;
        $store ->save();
        return response()->json(['success' => "success"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    

    public function activated(Request $request)
    {
        $image       = $request->file('photo');
        $filename    = time() . '-'. $image->getClientOriginalName();
    
        //Fullsize
        $image->move(public_path().'/full/',$filename);
    
        $image_resize = Image::make(public_path().'/full/'.$filename);
        $image_resize->fit(900, 900);
        $image_resize->save(public_path('images/' .$filename));
    }
    public function activate(Request $request)
    {
        $id = $request->id;
        $store = Contents::find($id);
        $store -> status = 1;
        $store ->save();

        return $store;
    }
    public function deactivate(Request $request)
    {
        $id = $request->id;
        $store = Contents::find($id);
        $store -> status = 0;
        $store ->save();
    }
}
