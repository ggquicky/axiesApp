<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use App\Models\Nft;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Validation\Rule;

class NftController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

//        $nfts = nft::all();
//        $collections = collection::where('author_id',Auth::id())->get();
//
//        return view('main',compact('nfts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        $collections = Collection::all();
        $route = explode(".",Route::currentRouteName());
        $route = ucfirst($route[1]);

//      $collections = collection::where('author_id',Auth::id())->get();
        return view('nfts.create',compact('user', 'collections'),['route'=>$route]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

        $data = $request->validate([

            'author_id' => [auth::user()],
            'title' => ['required'],
            'description' => ['required'],
            'price' => ['required'],
            'collection_id'=>[],
            'royalty'=> [],

        ]);
        $data += ['author_id'=>Auth::id()];
        $path = $request->file('image')->store('images','public'); //toma el path de la imagen
        $data += ['img'=> $path];

        Nft::create($data);

        return redirect()->route('nfts.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Nft  $nft
     * @return \Illuminate\Http\Response
     */
    public function show(Nft $nft)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Nft  $nft
     * @return \Illuminate\Http\Response
     */
    public function edit(Nft $nft)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Nft  $nft
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Nft $nft)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Nft  $nft
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nft $nft)
    {
        //
    }
}
