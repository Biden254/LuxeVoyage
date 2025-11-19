@extends('layouts.app')

@section('content')

<h2>{{ $package->name }}</h2>
<p>{{ $package->description }}</p>
<p><strong>Location:</strong> {{ $package->location }}</p>
<p><strong>Price:</strong> KES {{ $package->price }}</p>

<hr>

<h3>Book This Package</h3>

@if (session('success'))
<p style="color: green">{{ session('success') }}</p>
@endif

<form method="POST" action="/book">
    @csrf
    <input type="hidden" name="package_id" value="{{ $package->id }}">
    <input type="text" name="full_name" placeholder="Full Name"><br><br>
    <input type="email" name="email" placeholder="Email"><br><br>
    <input type="text" name="phone" placeholder="Phone"><br><br>
    <input type="date" name="travel_date"><br><br>
    <input type="number" name="people" placeholder="Number of People"><br><br>
    <button type="submit">Book Now</button>
</form>

<hr>

<h3>Reviews</h3>
@foreach ($package->reviews as $r)
    <b>{{ $r->name }}</b> ({{ $r->rating }}/5)
    <p>{{ $r->comment }}</p>
    <hr>
@endforeach

<h4>Add Review</h4>
<form method="POST" action="/review">
    @csrf
    <input type="hidden" name="package_id" value="{{ $package->id }}">
    <input type="text" name="name" placeholder="Name"><br><br>
    <input type="number" name="rating" placeholder="Rating (1-5)"><br><br>
    <textarea name="comment" placeholder="Your review"></textarea><br><br>
    <button type="submit">Submit</button>
</form>

@endsection
