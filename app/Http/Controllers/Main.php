<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use App\Models\Nft;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Main extends Controller
{
    public function index()
    {
        $nfts = Nft::all();

        $collections = Collection::query()
        ->with('nfts')

        ->get();

//      $collections = collection::where('author_id',Auth::id())->get();

        return view('main',compact('nfts','collections'));
    }
    public function show()
    {
        $nfts = Nft::all();
//        $nfts = DB::table('nfts')
//            ->join('users', 'users.id', '=', 'nfts.author_id')
//            ->select('nfts.*', 'users.name')
//            ->get();

//      $collections = collection::where('author_id',Auth::id())->get();

        return view('main',compact('nfts'));
    }

}
