@extends('layout.base')
@section('content') {{-- @yield('content') --}}

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="alert alert-info text-center">Create new Event</h1>
        </div>
        <div class="col-12">
            <form action="{{ route('events.store') }}" method="post" class="row">
                @csrf
                <div class="col-6">
                    <label for="cow_name" class="form-label">Event Name</label>
                    <input type="text" class="form-control" id="event_name" name="event_name" placeholder="Name" value="{{old('event_name')}}">
                </div>
                <div class="col-6">
                    <label for="event_date" class="form-label">Event Date</label>
                    <input type="date" class="form-control" id="event_date" name="event_date" placeholder="Date" value="{{old('event_date')}}">
                </div>
                <div class="col-6">
                    <label for="event_max_capacity" class="form-label">Event Max Capacity</label>
                    <input type="number" class="form-control" id="event_max_capacity" name="event_max_capacity" placeholder="Max Capacity" value="{{old('event_max_capacity')}}">
                </div>
                <div class="col-6">
                    <label for="event_speaker_name" class="form-label">Event Speaker Name</label>
                    <input type="text" class="form-control" id="event_speaker_name" name="event_speaker_name" placeholder="Speaker Name" value="{{old('event_speaker_name')}}">
                </div>
                <div class="col-6">
                    <label for="event_location_name" class="form-label">Event Location Name</label>
                    <input type="text" class="form-control" id="event_location_name" name="event_location_name" placeholder="Location Name" value="{{old('event_location_name')}}">
                </div>
                <div class="col-6">
                    <label for="event_meetup_url" class="form-label">Event Meetup URL</label>
                    <input type="text" class="form-control" id="event_meetup_url" name="event_meetup_url" placeholder="Meetup URL" value="{{old('event_meetup_url')}}">
                </div>
                <div class="col-6">
                    <label for="event_is_virtual" class="form-label">Event is Virtual</label>
                    <input type="text" class="form-control" id="event_is_virtual" name="event_is_virtual" placeholder="Virtual" value="{{old('event_is_virtual')}}">
                </div>
                <div class="col-6">
                    <label for="event_price" class="form-label">Event Price</label>
                    <input type="number" class="form-control" id="event_price" name="event_price" placeholder="Price" value="{{old('event_price')}}">
                </div>
                

                @if ($errors->any())
                    <div class="alert alert-danger col-12 mt-4">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="col-12 my-4">
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-12 mb-4">
            <div class="d-grid gap-2">
                <a href="{{route('events.index')}}" class="btn btn-danger">Back</a>
            </div>
        </div>
    </div>
</div>



@endsection
