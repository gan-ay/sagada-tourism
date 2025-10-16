<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tourist Spots in Sagada</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <nav class="navbar navbar-expand-lg navbar-dark bg-success shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="/">Sagada Tourism</a>
        </div>
    </nav>

    <div class="container my-5">
        <h1 class="text-center mb-4">Famous Tourist Spots in Sagada</h1>

        <div class="card shadow-sm">
            <div class="card-body">
                <table class="table table-hover align-middle">
                    <thead class="table-success">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Image</th>
                            <th scope="col">Name</th>
                            <th scope="col">Location</th>
                            <th scope="col">Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td><img src="https://upload.wikimedia.org/wikipedia/commons/5/54/Sagada_Hanging_Coffins.jpg" width="100" class="rounded"></td>
                            <td>Hanging Coffins</td>
                            <td>Echo Valley</td>
                            <td>Ancient burial tradition of the Igorots, featuring coffins hanging on cliff sides.</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td><img src="https://upload.wikimedia.org/wikipedia/commons/b/b2/Sumaguing_Cave_Sagada.jpg" width="100" class="rounded"></td>
                            <td>Sumaguing Cave</td>
                            <td>Central Sagada</td>
                            <td>Known as the “Big Cave,” it’s famous for its rock formations and adventurous spelunking experience.</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td><img src="https://upload.wikimedia.org/wikipedia/commons/8/86/Kiltepan_Sunrise.JPG" width="100" class="rounded"></td>
                            <td>Kiltepan Viewpoint</td>
                            <td>Kiltepan</td>
                            <td>Offers a breathtaking view of the sunrise above the sea of clouds.</td>
@extends('layouts.dashboard')

@section('content')
<section class="py-20 bg-gray-50 min-h-screen">
    <div class="max-w-6xl mx-auto px-6">
        <h1 class="text-3xl font-bold text-blue-700 mb-6 text-center">Explore Tourist Spots</h1>

        <div class="grid md:grid-cols-3 gap-6">
            <div class="bg-white rounded-xl shadow p-6">
                <h2 class="text-lg font-semibold text-blue-600 mb-2">Hanging Coffins</h2>
                <p class="text-gray-600 text-sm">A famous cultural landmark symbolizing ancient burial traditions.</p>
            </div>

            <div class="bg-white rounded-xl shadow p-6">
                <h2 class="text-lg font-semibold text-blue-600 mb-2">Bomod-ok Falls</h2>
                <p class="text-gray-600 text-sm">Majestic waterfall surrounded by lush rice terraces.</p>
            </div>

            <div class="bg-white rounded-xl shadow p-6">
                <h2 class="text-lg font-semibold text-blue-600 mb-2">Sumaguing Cave</h2>
                <p class="text-gray-600 text-sm">The largest cave in Sagada — perfect for spelunking adventures.</p>
            </div>
        </div>
    </div>
</section>
@endsection
