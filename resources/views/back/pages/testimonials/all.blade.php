@extends('back.layouts.app')
@section('content')
    @include('back.partials.header')
    <div class="container test">
        <h1 class="text-center services fs-1">Testimonials</h1>
        @if (session()->has('success'))
            <div class="alert alert-success w-50 mx-auto m-3">
                <p class="text-success">{{ session()->get('success') }}</p>
            </div>
        @endif
        {{-- Alert Testimonial Updated --}}
        @if (session()->has('update'))
            <div class="alert alert-warning w-50 mx-auto m-3>
                <p class="text-warning">{{ session()->get('update') }}</p>
            </div>
        @endif
        {{-- Alert Testimonial Deleted --}}
        @if (session()->has('delete'))
            <div class="alert alert-danger w-50 mx-auto m-3">
                <p class="text-danger">{{ session()->get('delete') }}</p>
            </div>
        @endif
        <table class="table mt-5">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Poster Name Big</th>
                    <th scope="col">Date</th>
                    <th scope="col">Category</th>
                    <th scope="col">Rating</th>
                    <th scope="col">Quote</th>
                    <th scope="col">Headshot</th>
                    <th scope="col">Poster Name Small</th>
                    <th scope="col">Poster Title</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                    @foreach ($testimonials as $testimonial)
                    {{-- {{ dd($service->id) }} --}}
                    <tr>
                        <th scope="row">{{ $testimonial->id }}</th>

                        <td>{{ $testimonial->poster_name_big }}</td>
                        <td>{{ $testimonial->date }}</td>
                        <td>{{ $testimonial->category }}</td>
                        <td>{{ $testimonial->rating }}</td>
                        <td>{{ $testimonial->quote }}</td>
                        <td><img src="{{ asset('assets/images/' . $testimonial->headshot)}}"></td>
                        <td>{{ $testimonial->poster_name_small }}</td>
                        <td>{{ $testimonial->poster_title }}</td>
                        <td>
                            <a href="{{ route("testimonials.show", $testimonial) }}"><button class="btn btn-primary">Show</button>
                            </a>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
        <div class='text-center'>
            <a href="{{ route("testimonials.create") }}"><button class="btn btn-success bg-success">Create</button></a>
        </div>
    </div>
@endsection
