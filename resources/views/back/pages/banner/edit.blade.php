@extends('back/layouts/app')
@section('content')
    @include('back.partials.header')
    <div class="container">
        <h1 class="text-center services fs-1">Banner Edit</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach

                </ul>
            </div>
        @endif
        <form class="mx-5" action="{{ route('banner.update', $banner) }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" value="{{ old('title') ? old('title') : $banner->title }}" name="title">
            </div>
            <div class="mb-3">
                <label for="p" class="form-label">Paragraph</label>
                <input type="text" class="form-control" id="p" value="{{ old('p') ? old('p') : $banner->p }}" name="p">
            </div>
            <div class="mb-3">
                <label for="quotelink1" class="form-label">Quote Link 1</label>
                <input type="text" class="form-control" id="quotelink1" value="{{ old('quotelink1') ? old('quotelink1') : $banner->quotelink1 }}"
                    name="quotelink1">
            </div>
            <div class="mb-3">
                <label for="quotetext1" class="form-label">Quote Text 1</label>
                <input type="text" class="form-control" id="quotetext1" value="{{ old('quotetext1') ? old('quotetext1') : $banner->quotetext1 }}"
                    name="quotetext1">
            </div>
            <div class="mb-3">
                <label for="quotelogo1" class="form-label">Quote Logo 1</label>
                <input type="text" class="form-control" id="quotelogo1" value="{{ old('quotelogo1') ? old('quotelogo1') : $banner->quotelogo1 }}"
                    name="quotelogo1">
            </div>
            <div class="mb-3">
                <label for="quotelink2" class="form-label">Quote Link 2</label>
                <input type="text" class="form-control" id="quotelink2" value="{{old('quotelink2') ? old('quotelink2') : $banner->quotelink2 }}"
                    name="quotelink2">
            </div>
            <div class="mb-3">
                <label for="quotetext2" class="form-label">Quote Text 2</label>
                <input type="text" class="form-control" id="quotetext2" value="{{ old('quotetext2') ? old('quotetext2') : $banner->quotetext2 }}"
                    name="quotetext2">
            </div>
            <div class="mb-3">
                <label for="quotelogo2" class="form-label">Quote Logo 2</label>
                <input type="text" class="form-control" id="quotelogo2" value="{{ old('quotelogo2') ? old('quotelogo2') : $banner->quotelogo2}}"
                    name="quotelogo2">
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="text" class="form-control" id="image" value="{{ old('image') ? old('image') : $banner->image }}" name="image">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

@endsection


