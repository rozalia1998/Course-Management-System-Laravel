@extends('layouts.app')

@section('content')
    <div class="course-container">
        <div class='div'>
        <center>
        <button class="course-enroll-button"> <a href="{{ route('corses.create') }}" style="color:wheat ; text-decoration:none " > Register now</a></button>
        </center>
        </div>
        @foreach ($courses as $course)
            <div class="course-item">
                <img src="{{ asset('frontend/imag/Basic-Computer-Courses.jpg') }}" alt="Course Image">
                <h3 class="course-title">{{ $course->name }}</h3>
                {{-- <p class="course-description">Course description goes here. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> --}}
                <span class="course-price">{{ $course->price }}</span>

            </div>
        @endforeach
        <!-- Add more course items as needed -->
    </div>
@endsection
