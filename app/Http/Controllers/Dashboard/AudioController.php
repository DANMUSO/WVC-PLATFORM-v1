<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contents;
use App\Models\Audio;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use App\File;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
class AudioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $audio = Audio::latest()->get();
        return view('dashboard.audio', compact('audio'));
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
      
            $validator = Validator::make($request->all(), [
                'audio' => 'required|mimetypes:audio/mpeg,audio/mp4,audio/mp3',
            ]);
        
            if ($validator->fails()) {
                return response()->json(['error' => $validator->messages()->first()]);
            }
        if ( $request->hasFile('audio') ) {
            // The file
            $file = $request->file('audio');
            // File extension
            $extention = $file->getClientOriginalExtension();
            // File name ex: my-audio-song.mp3
            $name =  time().$request->title . '.' . $extention;
            // Path
            $public_path = public_path();
            // Save location /public/audio/mp3
            $location = $public_path . '/audio/';
            // Move file to /public/audio/mp3 and save it as my-audio-song.mp3
            $file->move($location, $name);

            
            $audio = new Audio;
            $audio -> audio = $name;
            $audio -> title  = $request -> audiotitle;
            $audio -> description  = $request -> audiodescription;
            $audio -> status = 0;
            $audio -> pastor_id = 1;
            $audio -> location = 'test';
            $audio -> language = $request -> audiolanguage;
            $audio ->  save();

            // Save link to the file /audio/mp3/my-audio-song.mp3 audiotitle
            // So in your view you can link to it.
        }
       
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

     public function activate(Request $request)
     {
         $id = $request->id;
         $store = Audio::find($id);
         $store -> status = 1;
         $store ->save();
 
         return $store;
     }
     public function deactivate(Request $request)
     {
         $id = $request->id;
         $store = Audio::find($id);
         $store -> status = 0;
         $store ->save();
     }
    public function destroy(string $id)
    {
        //
    }
}
