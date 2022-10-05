<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\Nft;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{
    public function store(Request $request)
    {

        $nft = Nft::findOrFail($request->input('nft_id'));
        $nft->Likes()->create(
            ['user_id'=>Auth::id()]

        );




        return back();

    }
    public function destroy(Like $Like)
    {

        $Like->delete();
        return back();

    }
}
