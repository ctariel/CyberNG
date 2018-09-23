<?php

namespace App\Http\Controllers;

use App\Hardware;
use App\Room;
use Illuminate\Http\Request;

class HardwareController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $rooms = Room::all();
        return view('admin/hardware/index', compact('rooms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Room $room)
    {
        //
        return view('admin/hardware/create', compact('room'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate(request(), [
            'room_id'     => 'required|integer',
            'name'        => 'required|max:255',
            'IPAddress'   => 'nullable',
            'MACAddress'  => 'nullable',
            'comment'     => 'nullable',
        ]);

        Hardware::create(request(['room_id', 'name', 'IPAddress', 'MACAddress', 'comment']));

        return redirect()->route('spaces.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Hardware  $hardware
     * @return \Illuminate\Http\Response
     */
    public function show(Hardware $hardware)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Hardware  $hardware
     * @return \Illuminate\Http\Response
     */
    public function edit(Room $room, Hardware $hardware)
    {
        //
        return view('admin/hardware/create', compact('room', 'hardware'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Hardware  $hardware
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Room $room, Hardware $hardware)
    {
        //
        $this->validate(request(), [
            'room_id'     => 'required|integer',
            'name'        => 'required|max:255',
            'IPAddress'   => 'nullable',
            'MACAddress'  => 'nullable',
            'comment'     => 'nullable',
        ]);

        $hardware->update(request(['room_id', 'name', 'IPAddress', 'MACAddress', 'comment']));

        return redirect()->route('spaces.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Hardware  $hardware
     * @return \Illuminate\Http\Response
     */
    public function destroy(Room $room, Hardware $hardware)
    {
        //
        $hardware->destroy();
    }
}
