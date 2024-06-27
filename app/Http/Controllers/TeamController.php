<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Teams;
use App\Models\Countries;
use Auth;

class TeamController extends Controller
{
    // Team Detail Page
    public function detail($id){
        $team= Teams::with('users', 'country_name')->find($id);
        return view('frontend.team_detail')->withName('Team Detail')->with('team', $team);
    }
    
    /* Team Profile Page */
    public function team_profile()
    {
        return view('frontend.profile.team')->withTitle("Team Profile");
    }
    
    /* Team Profile Edit Page */
    public function team_profile_add()
    {
        $countries = Countries::all();
        return view('frontend.profile.team_add')->withTitle("Team Profile Add")->with('countries', $countries);
    }
    
    /* Add New Tournament Page */
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'team_name' => 'required',
            'position' => 'required',
            'coach_name' => 'required',
            'manager_name' => 'required',
            'gender' => 'required',
            'group' => 'required',
            'street' => 'required',
            'city' => 'required',
            'zip_code' => 'required',
            'country' => 'required',
            'image' => 'mimes:jpeg,jpg,png,gif|required',
        ],[
            'phone.required'=> 'Phone Number (Main) is Required',
            'phone2.required'=> 'Phone Number (Additional) is Required',
        ]);
        
        if ($validator->fails()) {
            return redirect('team-profile/add')
            ->withErrors($validator)
            ->withInput();
        }
        
        $record= new Teams;
        $record->user_id = Auth::id();
        $record->team_name = $request->team_name;
        $record->position = $request->position;
        $record->coach_name = $request->coach_name;
        $record->manager_name = $request->manager_name;
        $record->gender = $request->gender;
        $record->group = $request->group;
        $record->street = $request->street;
        $record->city = $request->city;
        $record->zip_code = $request->zip_code;
        $record->country = $request->country;
        
        if($request->hasFile('image')){
            $image = $request->file('image');
            $fileName = time() . '.' . $image->getClientOriginalExtension();
            $request->image->move(public_path('team-img'), $fileName);
            $record->image = $fileName;
        }
        
        $record->save();
        
        return back()->with('success', 'Team created Successfully!');
    }
    
    /* Team Profile Edit Page */
    public function team_profile_edit($id)
    {
        $team = Teams::where('user_id', Auth::id())->find($id);
        $countries = Countries::all();
        return view('frontend.profile.team_edit')->withTitle("Team Profile Edit")->with(['team' => $team, 'countries' => $countries]);
    }
    
    /* Add New Tournament Page */
    public function update($id, Request $request)
    {
        $validator = Validator::make($request->all(), [
            'team_name' => 'required',
            'position' => 'required',
            'coach_name' => 'required',
            'manager_name' => 'required',
            'gender' => 'required',
            'group' => 'required',
            'street' => 'required',
            'city' => 'required',
            'zip_code' => 'required',
            'country' => 'required',
            'image' => 'mimes:jpeg,jpg,png,gif',
        ],[
            'phone.required'=> 'Phone Number (Main) is Required',
            'phone2.required'=> 'Phone Number (Additional) is Required',
        ]);
        
        if ($validator->fails()) {
            return redirect('team-profile/edit/'.$id)
            ->withErrors($validator)
            ->withInput();
        }
        
        $record= Teams::where('user_id', Auth::id())->find($id);
        $record->team_name = $request->team_name;
        $record->position = $request->position;
        $record->coach_name = $request->coach_name;
        $record->manager_name = $request->manager_name;
        $record->gender = $request->gender;
        $record->group = $request->group;
        $record->street = $request->street;
        $record->city = $request->city;
        $record->zip_code = $request->zip_code;
        $record->country = $request->country;
        
        if($request->hasFile('image')){
            $image = $request->file('image');
            $fileName = time() . '.' . $image->getClientOriginalExtension();
            $request->image->move(public_path('team-img'), $fileName);
            $record->image = $fileName;
        }
        
        $record->save();
        
        return back()->with('success', 'Team updated Successfully!');
    }
    
    /* Team Profile for Organiser Page */
    public function team_for_organiser()
    {
        return view('frontend.profile.team_for_organiser')->withTitle("Team Profile For Organiser");
    }
}
