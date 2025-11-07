@extends('layouts.master')
    @section('add-button')
    <div class="mb-4 text-center">
        <a href="/touristspot/create" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add New Tourist Spot</a>
    </div>
    @endsection

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
                    <th>Actions</th>
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
                        <a href="/touristspot/{{ $touristspot->spot_id }}" style="text-decoration: underline;">
                            {{ $touristspot->spot_name }}
                        </a>
                    </td>
                    <td>{{ $touristspot->location }}</td>
                    <td>{{ $touristspot->description }}</td>
                    <td>
                        <a href="/touristspot/{{ $touristspot->spot_id }}/edit" class="btn btn-primary btn-sm">Edit</a>
                        <form method="POST" action="/touristspot/{{ $touristspot->spot_id }}" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this tourist spot?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
