@extends('back.layouts.app')
@section('content')
    @include('back.partials.header')
    <div class="container">
        <h1 class="text-center services fs-1">Edit Testimonial </h1>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        <form action="{{ route("testimonials.update", $testimonial) }}" method="post">
            @csrf
            @method('put')
            <div class="mb-3">
                <label for="poster_name_big" class="form-label">Poster Name Big</label>
                <input type="text" class="form-control" id="poster_name_big" name="poster_name_big" value="{{ old('poster_name_big') ? old('poster_name_big') : $testimonial->poster_name_big }}">
            </div>
            <div class="mb-3">
                <label for="date" class="form-label">Date</label>
                <input type="text" class="form-control" id="date" name="date" value="{{ old('date') ? old('date') : $testimonial->date }}"">
            </div>
            <div class="mb-3">
                <label for="category" class="form-label">Category</label>
                <input type="text" class="form-control" id="category" name="category" value="{{ old('category') ? old('category') : $testimonial->category }}">
            </div>
            <div class="mb-3">
                <label for="rating" class="form-label">Rating</label>
                <input type="number" class="form-control" id="rating" name="rating" value="{{ old('rating') ? old('rating') : $testimonial->rating }}"">
            </div>
            <div class="mb-3">
                <label for="quote" class="form-label">Quote</label>
                <input type="text" class="form-control" id="quote" name="quote" value="{{ old('quote') ? old('quote') : $testimonial->quote }}">
            </div>
            <div class="mb-3">
                <label for="headshot" class="form-label">Headshot</label>
                <img src="{{ asset('assets/images/' . $testimonial->headshot)}}" class="w-25 p-5 ps-0 d-block">
                <input type="file" class="form-control" id="headshot" name="headshot" value="{{ old('headshot') ? old('headshot') : $testimonial->headshot }}">
            </div>
            <div class="mb-3">
                <label for="poster_name_small" class="form-label">Poster Name Small</label>
                <input type="text" class="form-control" id="poster_name_small" name="poster_name_small" value="{{ old('poster_name_small') ? old('poster_name_small') : $testimonial->poster_name_small }}">
            </div>
            <div class="mb-3">
                <label for="poster_title" class="form-label">Poster Title</label>
                <input type="text" class="form-control" id="poster_title" name="poster_title" value="{{ old('poster_title') ? old('poster_title') : $testimonial->poster_title }}">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
