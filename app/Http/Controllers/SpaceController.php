<?php

namespace App\Http\Controllers;

use App\Space;
use App\City;
use Illuminate\Http\Request;

class SpaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $spaces = Space::all();

        return view('admin/spaces/index', compact('spaces'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $cities = City::orderBy('country')->orderBy('name')->pluck('name', 'id');
        return view('admin/spaces/create', compact('cities'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(), [
            'city_id'     => 'required|integer',
            'name'        => 'required|unique:spaces|max:255',
            'address'     => 'nullable',
            'phoneNumber' => 'nullable',
            'logo'        => 'nullable',
            'email'       => 'required|unique:spaces|max:255|email',
        ]);

        Space::create(request(['city_id', 'name', 'address', 'phoneNumber', 'logo', 'email']));

        return redirect()->route('spaces.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Space  $space
     * @return \Illuminate\Http\Response
     */
    public function show(Space $space)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Space  $space
     * @return \Illuminate\Http\Response
     */
    public function edit(Space $space)
    {
        $cities = City::orderBy('country')->orderBy('name')->pluck('name', 'id');
        return view('admin/spaces/create', compact('cities', 'space'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Space  $space
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Space $space)
    {
        $this->validate(request(), [
            'city_id'     => 'required|integer',
            'name'        => 'required|unique:spaces,name,' . $space->id . '|max:255',
            'address'     => 'nullable',
            'phoneNumber' => 'nullable',
            'logo'        => 'nullable',
            'email'       => 'required|unique:spaces,email,' . $space->id . '|max:255|email',
        ]);

        $space->update(request(['city_id', 'name', 'address', 'phoneNumber', 'logo', 'email']));

        return redirect()->route('spaces.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Space  $space
     * @return \Illuminate\Http\Response
     */
    public function destroy(Space $space)
    {
        //
    }
}
