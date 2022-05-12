@extends('back.layouts.app')
@section('content')
    @include('back.partials.header')
    <div class="container py-5 my-5">
        <h1 class="text-center fs-1 py-5">Banner</h1>
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
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">P</th>
                    <th scope="col">Quotelink1</th>
                    <th scope="col">Quotetext1</th>
                    <th scope="col">Quotelogo1</th>
                    <th scope="col">Quotelink2</th>
                    <th scope="col">Quotetext2</th>
                    <th scope="col">Quotelogo2</th>
                    <th scope="col">Image</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>

                    <th scope="row">{{ $banner->id }}</th>
                    <td>{{ $banner->title }}</td> -
                    <td>{{ $banner->p }}</td>
                    <td>{{ $banner->quotelink1 }}</td>
                    <td>{{ $banner->quotetext1 }}</td>
                    <td>{{ $banner->quotelogo1 }}</td>
                    <td>{{ $banner->quotelink2 }}</td>
                    <td>{{ $banner->quotetext2 }}</td>
                    <td>{{ $banner->quotelogo2 }}</td>
                    <td>{{ $banner->image }}</td>
                    <td>
                        <a href="{{ route('banner.edit', $banner) }}">Edit</a>
                        {{-- {{ $banner->id }} --}}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
