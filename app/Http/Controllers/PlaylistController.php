<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Playlist;

class PlaylistController extends Controller
{
    public function index()
    {
        return view('playlists.index')->with('playlists', Playlist::all());
    }

    public function show(Playlist $playlist)
    {
        return $playlist->songs;
    }
}
