<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;
class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::latest()->withTrashed()->get();
        return view('dashboard/users',compact('users'));
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
        $validator = Validator::make(
            $request->all(),
            [
                'phone' => 'required |unique:users',
                'email' => 'required |unique:users',
            ]
        );

        if ($validator->fails()) {
            return response()->json(['error' => $validator->messages()->first()]);
        }

        $store = new User;
        $store -> name = $request->fullname;
        $store -> phone = $request->phone;
        $store -> email = $request->email;
        $store -> role = $request->role;
        $store -> password = "Grainspro@2023";
        $store ->save();
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
    public function update(Request $request)
    {
        $id = $request->id;
        $store = User::find($id);
        $store -> name = $request->fullnameu;
        $store -> phone = $request->phoneu;
        $store -> email = $request->emailu;
        $store -> role = $request->roleu;
        $store ->save();
        return response()->json(['success' => "success"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $id = $request->id;
        $product = User::find($id);
        $product->delete();
    }

    public function activate(Request $request){
        $id = $request->id;
        $product = User::withTrashed()->find($id);
        $product -> deleted_at = NULL;
        $product->save();
    }
}
