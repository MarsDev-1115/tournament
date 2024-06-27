<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Teams;

class TeamController extends Controller
{
    //
    public function index() {
        return view('admin.team.index')->withTitle('Teams');
    }

    public function detail() {
        return view('admin.team.detail')->withTitle('Teams');
    }
}
