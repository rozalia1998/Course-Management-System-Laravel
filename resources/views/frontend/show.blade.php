@extends('layouts.app')

@section('content')
<center>
@if($courses->isNotEmpty())
<table id="dynamic-table" class="table table-striped table-bordered table-hover" style='width:600px'>
    <thead>
        <tr> 
            <th width="100">Course Name</th>
            <th width="100">Course Price</th>
        </tr>
    </thead>
    <tbody>
@endif
        @forelse ($courses as $course)
        <tr>
            <td> {{ $course->name }}</td> 
            <td>{{ $course->price }}</td>           
        </tr> 
        @empty
        <p>You haven't enroller in any course yet</p>
    @endforelse   
    </tbody>
</table>
<a href='{{route('corses.index')}}' style='text-decoration:none;'>Go Back</a>
</center>
@endsection
