@extends('back.layouts.app')
@section('content')
    <div class="container">
        <h1 class="text-center py-4">Create Service</h1>
        <form action="{{ route("services.store") }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $service->title }}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" class="form-control" id="description" name="description" value="{{ $service->description }}">
            </div>
            <div class="mb-3">
                <label for="href_link" class="form-label">HREF Link</label>
                <input type="text" class="form-control" id="href_link" name="href_link" value="{{ $service->href_link }}">
            </div>
            <div class="mb-3">
                <label for="href_text" class="form-label">HREF Text</label>
                <input type="text" class="form-control" id="href_text" name="href_text" value="{{ $service->href_text }}">
            </div>
            <div class="mb-3">
                <label for="href_text" class="form-label">HREF Text</label>
                <input type="text" class="form-control" id="href_text" name="href_text" value="{{ $service->href_logo }}">
            </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
