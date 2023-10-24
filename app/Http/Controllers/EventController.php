<?php

namespace App\Http\Controllers;

use App\Http\Requests\EventRequest;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
{
    $event = Event::where('event_name', 'like', '%' . $request->search_term . '%')->get();
    return view('events.index', [
        'events' => $event
    ]);
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('events.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EventRequest $request)
    {

        $event = Event::create($request->all());
        return redirect('/events');
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        return view('events.edit', [
            'event' => $event
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EventRequest $request, Event $event)
    {
        $event->update($request->all());
        return redirect('/events');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EventRequest $event)
    {
        $event->delete();
        return redirect('/events');
    }
}
