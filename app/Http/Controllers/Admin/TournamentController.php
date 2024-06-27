<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TournamentController extends Controller
{
    //
    public function index() {
        return view('admin.tournament.index')->withTitle('Tournaments');
    }

    public function detail() {
        return view('admin.tournament.detail')->withTitle('Tournaments');
    }
}
