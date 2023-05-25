<?php

namespace App\Http\Controllers;

use App\Models\Watchlists;
use Illuminate\Http\Request;

class WatchlistsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Watchlists::all();
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Watchlists  $watchlists
     * @return \Illuminate\Http\Response
     */
    public function show(Watchlists $watchlists)
    {
        return Watchlists::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Watchlists  $watchlists
     * @return \Illuminate\Http\Response
     */
    public function edit(Watchlists $watchlists)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Watchlists  $watchlists
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Watchlists $watchlists)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Watchlists  $watchlists
     * @return \Illuminate\Http\Response
     */
    public function destroy(Watchlists $watchlists)
    {
        $watchlist = Watchlists::find($id);
        if($watchlist) {
            $watchlist->delete();

            return response()->json(['succes' => 'Watchlist deleted successfully'], 200);
        }
        return response()->json(['error' => 'Question not found'],404);
    }
}
