@extends('back.layouts.app')
@section('content')
    @include('back.partials.header')
    <div class="vh-100 w-100 d-flex align-items-center justify-content-center">
        <div>
            <h1>
                Welcome to the back-end
                @if (Auth::check())

                @else
                    <p>You're not logged in</p>
                @endif
            </h1>
        </div>
    </div>
@endsection

