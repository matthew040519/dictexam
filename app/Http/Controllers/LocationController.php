<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\location;

class LocationController extends Controller
{
    //
    public function index()
    {
        $delete = request()->delete;

        if($delete != "")
        {
            location::where('id', $delete)->delete();
        }

        $place = location::all();

        return view('dashboard')->with('place', $place);
    }

    public function addlocation(Request $request)
    {
        location::create([
            'location' => $request->location
        ]);

        return redirect('dashboard');
    }

    public function viewmap()
    {
        $id = request()->id;

        $location = location::where('id', $id)->first();

        return view('viewmap')->with('location', $location);

    }

    public function edit()
    {
        $id = request()->id;

        $location = location::where('id', $id)->first();

        return view('edit')->with('location', $location);
    }

    public function editmap(Request $request)
    {
        location::where('id', $request->id)->update(['location' => $request->location]);

        return redirect('dashboard');
    }

}
