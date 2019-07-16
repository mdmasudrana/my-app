
@extends('layouts.app')

@section('content')


        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else

                        @if (Route::has('register'))
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    welcome
                </div>

                <div class="links">
                    
                    <a href="http://lessonbd.com/">lessonbd</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
        @endsection
