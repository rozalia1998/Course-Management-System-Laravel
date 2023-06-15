@extends('dashboard.layout.dashboard')


@section('content')
    <!-- div.table-responsive -->

    <!-- div.dataTables_borderWrap -->

        <table id="dynamic-table" class="table table-striped table-bordered table-hover">
		{{$tname = "Trash"}}
            <thead>
                <tr>


                    <th width="100">Name</th>
                    <th width="100">Price</th>
                    <th width="130">Action</th>
                </tr>
            <tbody>

                @foreach ($courses as $course)
                    <tr>


                        <td>{{ $course->name }}</td>
                        <td>{{ $course->price }}</td>
                     

                        <td>
                            <a class="btn btn-xs btn-info" href="{{ route( 'courses.restore', $course->id) }}">
                                <i class="ace-icon fa fa-undo bigger-120"> </i>
                            </a>
                            <a class="btn btn-xs btn-danger" href="{{ route( 'course.destroy', $course->id) }}">
                                <i class="ace-icon fa fa-trash-o bigger-120"></i>
                    
                        </td>

                    </tr>
                @endforeach



            </tbody>
        </table>


  
@endsection