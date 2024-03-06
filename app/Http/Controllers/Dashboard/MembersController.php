<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Members;
use RealRashid\SweetAlert\Facades\Alert;
class MembersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $members = Members::latest()->withTrashed()->get();
        return view('dashboard/members',compact('members'));
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
                'phone' => 'required |unique:members',
                'email' => 'required |unique:members',
            ]
        );

        if ($validator->fails()) {
            return response()->json(['error' => $validator->messages()->first()]);
        }

        $store = new Members;
        $store -> name = $request->fullname;
        $store -> phone = $request->phone;
        $store -> email = $request->email;
        $store -> maritalstatus = $request->maritalstatus;
        $store -> gender = $request-> gender;
        $store -> state = $request-> state;
        $store -> status = $request-> status;
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
        $store = Members::find($id);
        $store -> name = $request->fullnamem;
        $store -> phone = $request->phonem;
        $store -> email = $request->emailm;
        $store -> maritalstatus = $request->maritalstatusm;
        $store -> gender = $request-> genderm;
        $store -> state = $request-> statem;
        $store -> status = $request-> statusm;
        $store -> join_date = $request-> joindatem;
        $store ->save();
        return response()->json(['success' => "success"]);
    }

    public function destroy(Request $request)
    {
        $id = $request->id;
        $product = Members::find($id);
        $product->delete();
    }

    public function activate(Request $request){
        $id = $request->id;
        $product = Members::withTrashed()->find($id);
        $product -> deleted_at = NULL;
        $product->save();
    }
}
