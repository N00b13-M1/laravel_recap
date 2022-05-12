@extends('back.layouts.app')
@section('content')
    @include('back.partials.header')
    <div class="container">
        <h1 class="text-center services fs-1">In-detail Service </h1>
        <form action="{{ route("testimonials.index") }}" method="get">
            <div class="mb-3">
                <label for="poster_name_big" class="form-label">Poster Name Big</label>
                <input type="text" class="form-control" id="poster_name_big" name="poster_name_big" value="{{ $testimonial->poster_name_big }}" readonly>
            </div>
            <div class="mb-3">
                <label for="date" class="form-label">Date</label>
                <input type="text" class="form-control" id="date" name="date" value="{{ $testimonial->date }}" readonly>
            </div>
            <div class="mb-3">
                <label for="category" class="form-label">Category</label>
                <input type="text" class="form-control" id="category" name="category" value="{{ $testimonial->category }}" readonly>
            </div>
            <div class="mb-3">
                <label for="rating" class="form-label">Rating</label>
                <input type="number" class="form-control" id="rating" name="rating" value="{{ $testimonial->rating }}" readonly>
            </div>
            <div class="mb-3">
                <label for="quote" class="form-label">Quote</label>
                <input type="text" class="form-control" id="quote" name="quote" value="{{ $testimonial->quote }}" readonly>
            </div>
            <div class="mb-3">
                <label for="headshot" class="form-label">Headshot</label>
                <input type="text" class="form-control" id="headshot" name="headshot" value="{{ $testimonial->headshot }}" readonly>
            </div>
            <div class="mb-3">
                <label for="poster_name_small" class="form-label">Poster Name Small</label>
                <input type="text" class="form-control" id="poster_name_small" name="poster_name_small" value="{{ $testimonial->poster_name_small }}" readonly>
            </div>
            <div class="mb-3">
                <label for="poster_title" class="form-label">Poster Title</label>
                <input type="text" class="form-control" id="poster_title" name="poster_title" value="{{ $testimonial->poster_title }}" readonly>
            </div>

            <button type="submit" class="btn btn-primary m-2">Return</button>
        </form>
        <td>
            <button type="submit" class="btn btn-warning bg-warning m-2"><a href="{{ route('testimonials.edit', $testimonial) }}">Edit</a></button>
        </td>
        <td>
            <form action="{{ route("testimonials.destroy", $testimonial) }}" method="post">
                @csrf
                @method('DELETE')
            <button class="btn btn-danger bg-danger m-2" type="submit">Delete</button>
            </form>
        </td>
    </div>
@endsection
