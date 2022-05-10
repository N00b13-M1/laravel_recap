@extends('back.layouts.app')
@section('content')
    @include('back.partials.header')
    <div class="container">
        <h1 class="text-center services fs-1">In-detail Service </h1>
        <form action="{{ route("services.index") }}" method="get">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $service->title }}" readonly>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" class="form-control" id="description" name="description" value="{{ $service->description }}" readonly>
            </div>
            <div class="mb-3">
                <label for="href_link" class="form-label">HREF Link</label>
                <input type="text" class="form-control" id="href_link" name="href_link" value="{{ $service->href_link }}" readonly>
            </div>
            <div class="mb-3">
                <label for="href_text" class="form-label">HREF Text</label>
                <input type="text" class="form-control" id="href_text" name="href_text" value="{{ $service->href_text }}" readonly>
            </div>
            <div class="mb-3">
                <label for="href_text" class="form-label">HREF Text</label>
                <input type="text" class="form-control" id="href_text" name="href_text" value="{{ $service->href_logo }}" readonly>
            </div>
            <button type="submit" class="btn btn-primary m-2">Return</button>
        </form>
        <td>
            <button type="submit" class="btn btn-warning bg-warning m-2"><a href="{{ route('services.edit', $service) }}">Edit</a></button>
        </td>
        <td>
            <form action="{{ route("services.destroy", $service) }}" method="post">
                @csrf
                @method('DELETE')
            <button class="btn btn-danger bg-danger m-2" type="submit">Delete</button>
            </form>
        </td>
    </div>
@endsection
