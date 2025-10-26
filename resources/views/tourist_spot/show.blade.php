@extends('layouts.app')

@section('content')
<div class="table">
    <H5>{{ $touristSpot-> Image}}</H5>
    <h5>{{ $touristSpot->spot_name }}</h5>
    <h5>{{ $touristSpot->location}}</h5>
    <H5>{{ $touristSpot-> description}}</H5>
</div>
@endsection
