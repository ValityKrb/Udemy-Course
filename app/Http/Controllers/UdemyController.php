<?php

namespace App\Http\Controllers;

use App\Models\udemy;
use App\Http\Requests\StoreudemyRequest;
use App\Http\Requests\UpdateudemyRequest;

class UdemyController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreudemyRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreudemyRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\udemy  $udemy
     * @return \Illuminate\Http\Response
     */
    public function show(udemy $udemy)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\udemy  $udemy
     * @return \Illuminate\Http\Response
     */
    public function edit(udemy $udemy)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateudemyRequest  $request
     * @param  \App\Models\udemy  $udemy
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateudemyRequest $request, udemy $udemy)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\udemy  $udemy
     * @return \Illuminate\Http\Response
     */
    public function destroy(udemy $udemy)
    {
        //
    }
}
