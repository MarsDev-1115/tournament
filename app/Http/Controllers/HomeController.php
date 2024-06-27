<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('frontend.index')->withTitle('Home');
    }
    
    public function about_us()
    {
        return view('frontend.about_us')->withTitle('About Us');
    }

    public function contact_us()
    {
        return view('frontend.contact_us')->withTitle('Contact Us');
    }
    
    public function contact_submit(Request $request)
    {
//         $record->text = $request->name;
//         $record->page = $request->email;
//         $record->position = $request->message;
        
        return back()->with('success', 'Sponsor uploaded Successfully!');
    }
    
    public function friendly_games()
    {
        return view('frontend.friendly_games')->withTitle('Friendly Games');
    }
    
    public function team_digital()
    {
        return view('frontend.team_digital')->withTitle('Team Digital');
    }
}
