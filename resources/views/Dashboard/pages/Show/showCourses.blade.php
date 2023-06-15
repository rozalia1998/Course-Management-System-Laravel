@extends('dashboard.layout.dashboard')

@section('content')
    <!-- div.table-responsive -->

    <!-- div.dataTables_borderWrap -->

        <table id="dynamic-table" class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th width="100">Course Name</th>
                    <th width="100">Course Price</th>
                </tr>
            <tbody>

                @foreach ($courses as $course)
                    <tr>

                        <td>{{ $course->name }}</td>
                        <td>{{ $course->price }}</td>

                    </tr>
                @endforeach



            </tbody>
        </table>


  
@endsection