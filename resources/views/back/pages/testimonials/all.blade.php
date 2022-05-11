@extends('back.layouts.app')
@section('content')
    @include('back.partials.header')
    <div class="container test">
        <h1 class="text-center services fs-1">Testimonials</h1>
        @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
        @endif

        @if (session()->has('erreur'))
            <div class="alert alert-danger">
                {{ session()->get('erreur') }}
            </div>
        @endif
        @error('refused')
            <div class='alert alert-danger'>{{  $message }}</div>
        @enderror
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
