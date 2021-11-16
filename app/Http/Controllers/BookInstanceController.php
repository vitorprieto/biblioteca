<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookInstanceRequest;
use App\Http\Requests\UpdateBookInstanceRequest;
use App\Models\BookInstance;

class BookInstanceController extends Controller
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
     * @param  \App\Http\Requests\StoreBookInstanceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBookInstanceRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BookInstance  $bookInstance
     * @return \Illuminate\Http\Response
     */
    public function show(BookInstance $bookInstance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BookInstance  $bookInstance
     * @return \Illuminate\Http\Response
     */
    public function edit(BookInstance $bookInstance)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBookInstanceRequest  $request
     * @param  \App\Models\BookInstance  $bookInstance
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBookInstanceRequest $request, BookInstance $bookInstance)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BookInstance  $bookInstance
     * @return \Illuminate\Http\Response
     */
    public function destroy(BookInstance $bookInstance)
    {
        //
    }
}
