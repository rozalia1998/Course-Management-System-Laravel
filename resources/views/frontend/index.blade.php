@extends('layouts.app')

@section('content')
<center>
    <h2>All Available Courses</h2>
    <form class="example" method="GET" action="{{ route('course.search') }}"> 
        <input type="text" placeholder="Search.." name="search">
        <button type="submit" name="submit">Search</button>
    </form>
</center>
<div class="course-container">
        @foreach ($courses as $course)
            <div class="course-item">
                <img src="{{ asset('frontend/imag/Basic-Computer-Courses.jpg') }}" alt="Course Image">
                <h3 class="course-title">{{ $course->name }}</h3>
                {{-- <p class="course-description">Course description goes here. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> --}}
                <span class="course-price">{{ $course->price }}</span><br>
                <form role="form" method="POST" enctype="multipart/form-data"
                action="{{ route('corses.store') }}">
                @csrf
                <input type='hidden' name='course' value='{{$course->id}}' />
                <button class="course-enroll-button"> Enroll now</button>
            </form>
            </div>
        @endforeach
        <!-- Add more course items as needed -->
    </div>
    <center>
        <button class="course-enroll-button"><a href="{{ route('courses.showMyCourses') }}" style="color:wheat ; text-decoration:none " > Show My Enrolled Courses</a></button>
    </center>
@endsection
