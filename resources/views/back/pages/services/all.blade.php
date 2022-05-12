@extends('back.layouts.app')
@section('content')
    @include('back.partials.header')
    <div class="container test">
        <h1 class="text-center services fs-1">Services</h1>
        {{-- Alert Testimonial Added --}}
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
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Link</th>
                    <th scope="col">Text</th>
                    <th scope="col">Logo</th>
                    <th scope="col">Card Logo</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($services as $service)
                    {{-- {{ dd($service->id) }} --}}
                    <tr>
                        <th scope="row">{{ $service->id }}</th>

                        <td>{{ $service->title }}</td>
                        <td>{{ $service->description }}</td>
                        <td>{{ $service->href_link }}</td>
                        <td>{{ $service->href_text }}</td>
                        <td><i class="{{ $service->href_logo }}"></i></td>
                        <td><img src="{{ asset('assets/images/' . $service->card_logo) }}"></td>
                        <td>
                            <a href="{{ route('services.show', $service) }}"><button class="btn btn-primary">Show</button>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class='text-center'>
            <a href="{{ route('services.create') }}"><button class="btn btn-success bg-success">Create</button></a>
        </div>
    </div>
@endsection
