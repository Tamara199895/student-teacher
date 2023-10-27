<?php

namespace App\Http\Controllers;

use App\Models\Ratebook;
use Illuminate\Http\Request;

class RateBookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function show(Ratebook $ratebook)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ratebook $ratebook)
    {
        dd($ratebook);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ratebook $ratebook)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ratebook $ratebook)
    {
        //
    }
}
