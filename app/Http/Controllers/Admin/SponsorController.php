<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Admin\Sponsor;

class SponsorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sponsors = Sponsor::all();
        return view('admin.sponsor.index')->with('sponsors', $sponsors);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.sponsor.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $image = $request->file('image');
        $fileName = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move(public_path('sponsors'), $fileName);
        
        $record= new Sponsor();
        $record->itentifier = $request->itentifier;
        $record->text = $request->text;
        $record->page = $request->page;
        $record->position = $request->position;
        $record->size = $request->size;
        $record->link = $request->link;
        $record->image = $fileName? $fileName: "";
        $record->save();
        
        return back()->with('success', 'Sponsor uploaded Successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(sponsor $sponsor)
    {
        return view('admin.sponsor.detail');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(sponsor $sponsor)
    {
        return view('admin.sponsor.update')->with('sponsor', $sponsor);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, sponsor $sponsor)
    {
        if($request->hasFile('image')){
            $image = $request->file('image');
            $fileName = time() . '.' . $image->getClientOriginalExtension();
            $request->image->move(public_path('sponsors'), $fileName);
            unlink(public_path('sponsors/'.$sponsor->image));
        }
        
        $record= Sponsor::find($sponsor->id);
        $record->itentifier = $request->itentifier;
        $record->text = $request->text;
        $record->page = $request->page;
        $record->position = $request->position;
        $record->size = $request->size;
        $record->link = $request->link;
        if(isset($fileName)){
            $record->image = $fileName;
        }
        $record->save();
        
        return back()->with('success', 'Sponsor Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(sponsor $sponsor)
    {
        $record = Sponsor::findOrFail($sponsor->id);
        if($record->image){
            unlink(public_path('sponsors/'.$record->image));
        }
        $record->delete();
        
        return back()->with('success', 'Sponsor Deleted Successfully!');
    }
}
