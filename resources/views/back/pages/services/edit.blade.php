@extends('back.layouts.app')
@section('content')
    @include('back.partials.header')
    <div class="container">
        <h1 class="text-center services fs-1">Edit Service </h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('services.update', $service) }}" method="post">
            @csrf
            @method('put')
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title') ? old('title') : $service->title }}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" class="form-control" id="description" name="description"
                value="{{ old('description') ? old('description') : $service->description }}">
            </div>
            <div class="mb-3">
                <label for="href_link" class="form-label">HREF Link</label>
                <input type="text" class="form-control" id="href_link" name="href_link"
                value="{{ old('href_link') ? old('href_link') : $service->href_link }}">
            </div>
            <div class="mb-3">
                <label for="href_text" class="form-label">HREF Text</label>
                <input type="text" class="form-control" id="href_text" name="href_text"
                value="{{ old('href_text') ? old('href_text') : $service->href_text }}">
            </div>
            <div class="mb-3">
                <label for="href_logo" class="form-label">HREF Logo</label>
                <input type="text" class="form-control" id="href_logo" name="href_logo"
                value="{{ old('href_logo') ? old('href_logo') : $service->href_logo }}">
            </div>
            <div class="mb-3">
                <div class='logo-group'>
                    <label for='logo-column'>Logo</label>
                    {{-- @if ($service->logo === 'service-icon-01.png') --}}
                        <div class='d-flex'>
                            <div class="form-check me-2">
                                <input class="form-check-input" type="radio" name="card_logo"
                                    id="flexRadioDefault1" value="service-icon-01.png">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    <img src="{{ '/assets/images/service-icon-01.png' }}"
                                        style="width: 50px" alt="">
                                </label>
                            </div>
                            <div class="form-check ms-2">
                                <input class="form-check-input" type="radio" name="card_logo"
                                    id="flexRadioDefault2" value="service-icon-02.png">
                                <label class="form-check-label" for="flexRadioDefault2">
                                    <img src="{{ '/assets/images/service-icon-02.png' }}"
                                        style="width: 50px" alt="">
                                </label>
                            </div>
                            <div class="form-check ms-2">
                                <input class="form-check-input" type="radio" name="card_logo"
                                    id="flexRadioDefault3" value="service-icon-03.png">
                                <label class="form-check-label" for="flexRadioDefault3">
                                    <img src="{{ '/assets/images/service-icon-03.png' }}"
                                        style="width: 50px" alt="">
                                </label>
                            </div>
                            <div class="form-check ms-2">
                                <input class="form-check-input" type="radio" name="card_logo"
                                    id="flexRadioDefault4" value="service-icon-04.png">
                                <label class="form-check-label" for="flexRadioDefault4">
                                    <img src="{{ '/assets/images/service-icon-04.png' }}"
                                        style="width: 50px" alt="">
                                </label>
                            </div>
                        </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary m-2">Update</button>
        </form>
    </div>
@endsection
