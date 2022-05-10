@extends('back.layouts.app')
@section('content')
    @include('back.partials.header')
    <div class="container">
        <h1 class="text-center services fs-1">Banner</h1>
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
        <table class="table test">
            <thead>
                <tr>
                    <th scope="col">#</th>
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
                            <a href="{{ route('banner.edit', $banner->id) }}">Edit</a>
                            {{-- {{ $banner->id }} --}}
                        </td>
                    </tr>
                <a href="{{ route("banner.index") }}">Confirm testimonials</a>
            </tbody>
        </table>
    </div>
@endsection
