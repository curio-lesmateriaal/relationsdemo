<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Song;

class SongController extends Controller
{
    public function index()
    {
        return Song::all();
    }

    public function show(Song $song)
    {
        return $song;
    }
}
