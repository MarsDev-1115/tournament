<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Tournaments;
use App\Models\Organisers;
use App\Models\Teams;
use App\Models\TournamentsTeams;
use App\Models\Countries;

use Auth;

class TournamentController extends Controller
{
    /* Render Tournaments Page */
    public function index(Request $request)
    {
//         dd($request->category2);
        $tournaments = Tournaments::query();
        if($request->input('tournament_name')){ $tournaments->where('tournament_name',$request->input('tournament_name')); }
        if($request->input('category2')){ $tournaments->whereIn('category2', $request->input('category2')); }
        if($request->input('privacy')){ $tournaments->whereIn('privacy', $request->input('privacy')); }
        if($request->input('gender')){ $tournaments->whereIn('gender', $request->input('gender')); }
        if($request->input('group')){ $tournaments->whereIn('group', $request->input('group')); }
        if($request->input('fromDate')){ $tournaments->where('fromDate', '>=', $request->input('fromDate')); }
        if($request->input('toDate')){ $tournaments->where('toDate', '<=', $request->input('toDate')); }
        if($request->input('zip_code')){ $tournaments->where('zip_code',$request->input('zip_code')); }
        if($request->input('country')){ $tournaments->where('country',$request->input('country')); }
        $tournaments=$tournaments->get();
        $countries = Countries::all();
        return view('frontend.tournament')->withTitle('Tournaments')->with(['tournaments' => $tournaments, 'countries' => $countries, 'request' => $request]);
    }

    /* Tournament Detail Page */
    public function detail($slug)
    {
        $tournament = Tournaments::find($slug);
        $tournaments = Tournaments::query();
        if($tournament->gender){ $tournaments->where('gender', $tournament->gender); }
        if($tournament->group){ $tournaments->where('group', $tournament->group); }
        if($tournament->country){ $tournaments->where('country', $tournament->country); }
        $tournaments=$tournaments->get();
        return view('frontend.tournament_detail')->withTitle('Tournament Detail')->with(['tournament' => $tournament, 'tournaments' => $tournaments]);
    }

    /* Add New Tournament Page */
    public function add()
    {   
        $organiser = Organisers::where('user_id', Auth::id())->first();
        $teams = Teams::all();
        $countries = Countries::all();
        return view('frontend.tournaments.tournament_add')->withTitle('New Tournament')->with(['organiser' => $organiser, 'teams' => $teams, 'countries' => $countries]);
    }
    
    /* Add New Tournament Page */
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'tournament_name' => 'required|max:255',
            'fromDate' => 'required',
            'toDate' => 'required',
            'fromTime' => 'required',
            'toTime' => 'required',
            'street' => 'required',
            'city' => 'required',
            'zip_code' => 'required',
            'country' => 'required',
            'gender' => 'required',
            'group' => 'required',
            'number_of_groups' => 'required',
            'number_fo_teams' => 'required',
            'image' => 'mimes:jpeg,jpg,png,gif|required',
            'teams' => 'required',
        ]);
        
        if ($validator->fails()) {
            return redirect('tournaments/add')
            ->withErrors($validator)
            ->withInput();
        }
        
        $image = $request->file('image');
        $fileName = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move(public_path('tournaments-img'), $fileName);
        
        $organiser= Organisers::where('user_id', Auth::id())->first();
        
        $record= new Tournaments();
        $record->tournament_name = $request->tournament_name;
        $record->fromDate = $request->fromDate;
        $record->toDate = $request->toDate;
        $record->fromTime = $request->fromTime;
        $record->toTime = $request->toTime;
        $record->organiser_id = $organiser->id;
        $record->website = $request->website;
        $record->street = $request->street;
        $record->city = $request->city;
        $record->zip_code = $request->zip_code;
        $record->country = $request->country;
        $record->category = $request->category;
        $record->category2 = $request->category2;
        $record->gender = $request->gender;
        $record->group = $request->group;
        $record->number_of_groups = $request->number_of_groups;
        $record->number_fo_teams = $request->number_fo_teams;
        $record->game_time = $request->game_time;
        $record->playtime = $request->playtime;
        $record->pitch = $request->pitch;
        $record->privacy = $request->privacy;
        $record->image = $fileName? $fileName: "";
        $record->save();
        
        foreach($request->teams as $team){
            $tt= new TournamentsTeams();
            $tt->tournament_id = $record->id;
            $tt->team_id = $team;
            $tt->save();
        }
        
        return back()->with('success', 'Tournament created Successfully!');
    }

    /* Trounament Requests Management Page */
    public function req_index () {
        return view('frontend.tournaments.requests')->withTitle('Tournament Requests');
    }
    
    /* Trounament Requests Management Page */
    public function team_details () {
        return view('frontend.tournaments.team-details')->withTitle('Tournament Team Details');
    }
    
    /* Trounament Requests Management Page */
    public function schedule () {
        return view('frontend.tournaments.schedule')->withTitle('Tournament Schedule');
    }
}
