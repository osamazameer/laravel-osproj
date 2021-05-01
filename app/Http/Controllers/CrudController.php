<?php

namespace App\Http\Controllers;

use App\Crud;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $response = new Crud;
        $response->item = $request->input('item');
        $response->category = $request->input('cat');
        $response->price = $request->input('price');
        $response->save();

        $request->session()->flash('msg','Saved');
        return redirect('view');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Crud  $crud
     * @return \Illuminate\Http\Response
     */
    public function show(Crud $crud)
    {
        return view('view')->with('foodlist',Crud::all());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Crud  $crud
     * @return \Illuminate\Http\Response
     */
    public function edit(Crud $crud)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Crud  $crud
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Crud $crud)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Crud  $crud
     * @return \Illuminate\Http\Response
     */
    public function destroy(Crud $crud,$id)
    {
        Crud::destroy(array('id',$id));
        return redirect('view');
    }
}
