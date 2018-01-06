<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Institute;

class instituteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }
    
    public function index()
    {
        //
        $institutes = Institute::all();
        return view('institute.index',compact('institutes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('institute.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        Institute::create([
            'name'=>$request->name,
            'area'=>$request->area,
            'credit_limit'=>(int)$request->credit_limit

            ]);
        return redirect(route('institute.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $institute = Institute::findOrFail($id);      
        return view('institute.edit',compact('institute'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        $institute = Institute::findOrFail($id);
        $institute->update([
            'name'=>$request->name,
            'area'=>$request->area,
            'credit_limit'=>(int)$request->credit_limit

            ]);
        return redirect(route('institute.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
                $institute = Institute::findOrFail($id);
        $institute->delete();
        return redirect(route('institute.index'));
    }
}
