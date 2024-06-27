<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Organisers;
use App\Models\Tournaments;
use App\Models\Countries;
use Auth;

class OrganizerController extends Controller
{
    /* Organizer Profile Page */
    public function organizer_profile()
    {
        $organiser = Organisers::where('user_id', Auth::id())->first();
        $tournaments = Tournaments::all();
        return view('frontend.profile.organizer')->withTitle("Organizer Profile")->with(['organiser' => $organiser, 'tournaments' => $tournaments]);
    }
    
    /* organiser Profile Edit Page */
    public function organiser_profile_edit()
    {
        $organiser = Organisers::where('user_id', Auth::id())->first();
        $countries = Countries::all();
        return view('frontend.profile.organiser_edit')->withTitle("Organiser Profile Edit")->with(['organiser' => $organiser, 'countries' => $countries]);
    }
    
    /* Add New organiser Page */
    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'organiser_name' => 'required',
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
            return redirect('organiser-profile/edit/'.$id)
            ->withErrors($validator)
            ->withInput();
        }
        
        $record= Organisers::where('user_id', Auth::id())->first();
        if(!$record){
            $record= new Organisers;
        }
        $record->user_id = Auth::id();
        $record->organiser_name = $request->organiser_name;
        $record->street = $request->street;
        $record->city = $request->city;
        $record->zip_code = $request->zip_code;
        $record->country = $request->country;
        
        if($request->hasFile('image')){
            $image = $request->file('image');
            $fileName = time() . '.' . $image->getClientOriginalExtension();
            $request->image->move(public_path('organiser-img'), $fileName);
            $record->image = $fileName;
        }
        
        $record->save();
        
        return back()->with('success', 'Organisers updated Successfully!');
    }
}
