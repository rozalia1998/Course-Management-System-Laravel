@extends('dashboard.layout.dashboard')


@section('content')
    <!-- div.table-responsive -->

    <!-- div.dataTables_borderWrap -->
    <div class="widget-toolbar">

        <div class="d-none d-md-block">

        
                <a href="{{route('course.create')}}"
                    class="btn btn-primary btn-xs"><i
                        class="ace-icon fa fa-plus"></i>Creat</a>
        
        </div>
    </div>

        <table id="courses-table" class="table table-striped table-bordered table-hover">
		{{$tname = "Coureses"}}
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
                            <a class="btn btn-xs btn-info" href="{{ route( 'course.edit', $course->id) }}">
                                <i class="ace-icon fa fa-pencil bigger-120"> </i>
                            </a>
                            <a class="btn btn-xs btn-danger" href="{{ route( 'course.softdelete', $course->id) }}">
                                <i class="ace-icon fa fa-trash-o bigger-120"></i>
                            </a>
						
                        </td>

                    </tr>
                @endforeach



            </tbody>
        </table>


  
@endsection