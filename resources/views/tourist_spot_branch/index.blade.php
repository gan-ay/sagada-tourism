@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center">Tourist Spots</h1>
    <div class="table-responsive">
        <table class="table" style="width:100%">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Location</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                @foreach($spots as $touristspot)
                <tr>
                    <td>
                        <img src="{{ $touristspot->image_url ?? 'https://via.placeholder.com/100' }}"
                             width="100">
                    </td>
                    <td>
                        <a href="/tourist_spot/{{ $touristspot->spot_id }}" style="text-decoration: underline;">
                            {{ $touristspot->spot_name }}
                        </a>
                    </td>
                    <td>{{ $touristspot->location }}</td>
                    <td>{{ $touristspot->description }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
