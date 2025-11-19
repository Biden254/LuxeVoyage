@extends('layouts.app')

@section('content')
<h2>Explore Our Travel Packages</h2>

@foreach ($packages as $p)
<div class="card">
    <h3>{{ $p->name }}</h3>
    <p>{{ $p->location }}</p>
    <p>KES {{ $p->price }}</p>
    <a href="/packages/{{ $p->id }}">View Details</a>
</div>
@endforeach

@endsection
