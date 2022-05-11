@extends('back.layouts.app')
@section('content')
    @include('back.partials.header')
    <div class="container test">
        <h1 class="text-center services fs-1">Services</h1>
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
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Link</th>
                    <th scope="col">Text</th>
                    <th scope="col">Logo</th>
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
                        <td>
                            <a href="{{ route("services.show", $service) }}"><button class="btn btn-primary">Show</button>
                            </a>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
        <div class='text-center'>
            <a href="{{ route("services.create") }}"><button class="btn btn-success bg-success">Create</button></a>
        </div>
    </div>
@endsection
