@extends('back.layouts.app')
@section('content')
    <div class="container">
        <h1 class="text-center py-4">Create Service</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('services.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" class="form-control" id="description" name="description">
            </div>
            <div class="mb-3">
                <label for="href_link" class="form-label">HREF Link</label>
                <input type="text" class="form-control" id="href_link" name="href_link">
            </div>
            <div class="mb-3">
                <label for="href_text" class="form-label">HREF Text</label>
                <input type="text" class="form-control" id="href_text" name="href_text">
            </div>
            <div class="mb-3">
                <label for="href_logo" class="form-label">HREF Logo</label>
                <input type="text" class="form-control" id="href_logo" name="href_logo">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
