<?php

namespace App\Http\Controllers;

use App\Models\Ratebook;
use Illuminate\Http\Request;
use App\Http\Requests\RateRequest;

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
    public function store(RateRequest $request)
    {
        $validated = $request->validated();
        // dd($validated);
        $ratebook = Ratebook::find($request->id);

        Ratebook::where("id",$request->id)->update([
            'mark' => $validated['mark'],
            'comment' => $validated['comment']
        ]);
        return redirect()->back();
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
