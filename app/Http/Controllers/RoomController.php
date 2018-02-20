<?php

namespace App\Http\Controllers;

use App\Room;
use App\Space;
use Illuminate\Http\Request;

class RoomController extends Controller
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

        return view('admin/rooms/index', compact('rooms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Space $space)
    {
        return view('admin/rooms/create', compact('space'));
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
            'space_id'     => 'required|integer',
            'name'        => 'required|max:255',
            'comment'     => 'nullable',
        ]);

        Room::create(request(['space_id', 'name', 'comment']));

        return redirect()->route('spaces.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function show(Room $room)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function edit(Room $room)
    {
        //
        $space = $room->space;
        return view('admin/rooms/create', compact('room', 'space'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Room $room)
    {
        //
        $this->validate(request(), [
            'space_id' => 'required|integer',
            'name'     => 'required|max:255',
            'comment'  => 'nullable',
        ]);

        $room->update(request(['space_id', 'name', 'comment']));

        return redirect()->route('spaces.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function destroy(Room $room)
    {
        //
    }
}
