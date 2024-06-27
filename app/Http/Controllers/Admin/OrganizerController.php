<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Organisers;

class OrganizerController extends Controller
{
    //
        //
        public function index() {
            return view('admin.organizer.index')->withTitle('Organizers');
        }

        public function detail() {
            return view('admin.organizer.detail')->withTitle('Organizers Detail');
        }
}
