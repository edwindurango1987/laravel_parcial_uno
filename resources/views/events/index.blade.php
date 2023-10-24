@extends('layout.base')
@section('content') {{-- @yield('content') --}}


<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="alert alert-info text-center">Event System - Events</h1>
        </div>
    </div>
</div>

<div class="container">




    <form action="{{ route('events.index') }}" method="get">
        <select name="search_column">
            <option value="nombre_de_la_columna_1">event_name</option>
            <option value="nombre_de_la_columna_2">event_date</option>
            <option value="nombre_de_la_columna_3">event_max_capacity</option>
            <option value="nombre_de_la_columna_4">event_speaker_name</option>
            <option value="nombre_de_la_columna_5">event_location_name</option>
            <option value="nombre_de_la_columna_6">event_meetup_url</option>
            <option value="nombre_de_la_columna_7">event_is_virtual</option>
            <option value="nombre_de_la_columna_8">event_price</option>
        </select>
        <input type="text" name="search_term" placeholder="Término de búsqueda">
        <button type="submit">Filtrar</button>
    </form>
</div>




<main class="container">
    <div class="row">

        <h1 class="alert alert-success text-center"><i class="fa-solid fa-user"> </i> {{$event->event_name}}</h1>
    </div>

    <div class="row">


        <div class="card my-3">

            <div class="row g-8">
                <div class="col md-4">


                    <div class="col md-4">
                        <div class="card-body">



                            <h5 class="card-title">{{$event->event_name}}</h5>

                            <p class="card-title"><b>Event Name:</b> {{$event->event_name}}</p>
                            <p class="card-text"><b>Event Date:</b> {{$event->event_date}}</p>
                            <p class="card-text"><b>Event Max Capacity:</b> {{$event->event_max_capacity}}</p>
                            <p class="card-text"><b>Event Speaker Name:</b> {{$event->event_speaker_name}}</p>
                            <p class="card-text"><b>Event Location Name:</b> {{$event->event_location_name}}</p>
                            <p class="card-text"><b>Event Meetup URL:</b> {{$event->event_meetup_url}}</p>
                            <p class="card-text"><b>Event is Virtual:</b> {{$event->event_is_virtual}}</p>
                            <p class="card-text"><b>Event Price:</b> {{$event->event_price}}</p>

                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>
    <div class="d-grid gap-2 mt-1">
        <a href="{{ route('events.index') }}" class="btn btn-primary">Back</a>
</main>
</div>



<div class="col-12">
    <a href="/events/create" class="btn btn-success">Add Event</a>
</div>

<div class="col-12">
    <a href="/events/edit" class="btn btn-success">Edit Event</a>
</div>

<form action="{{route('events.destroy', $event)}}" method="post" onsubmit="return confirm('Are you sure?')">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button> -->



    @endsection