<?php

namespace App\Http\Controllers;

use App\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cities = City::orderBy('country')->orderBy('name')->get();

        return view('admin/cities/index', compact('cities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/cities/create');
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
          'newName'    => 'required|unique:cities,name|max:255',
          'newZipCode' => 'required|max:255',
          'newCountry' => 'required|max:255'
        ]);

        City::create( [
            'name' => request('newName'),
            'zipCode' => request('newZipCode'),
            'country' => request('newCountry')
        ]);

        return redirect()->route('cities.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\City  $city
     * @return \Illuminate\Http\Response
     */
    public function show(City $city)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\City  $city
     * @return \Illuminate\Http\Response
     */
    public function edit(City $city)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\City  $city
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, City $city)
    {
        $this->validate(request(), [
            'name'    => 'required|unique:cities,name,' . $city->id . ',|max:255',
            'zipCode' => 'required|max:255',
            'country' => 'required|max:255'
        ]);

        $city->name    = request('name');
        $city->zipCode = request('zipCode');
        $city->country = request('country');
        $city->save();

        return redirect()->route('cities.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\City  $city
     * @return \Illuminate\Http\Response
     */
    public function destroy(City $city)
    {
        $city->delete();
        return redirect()->route('cities.index');
    }
}
