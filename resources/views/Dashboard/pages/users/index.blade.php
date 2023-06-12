@extends('dashboard.layout.dashboard')


@section('content')
    <!-- div.table-responsive -->

    <!-- div.dataTables_borderWrap -->

    <table id="dynamic-table" class="table table-striped table-bordered table-hover">
        <thead>
            <tr>


                <th width="100">Name</th>
                <th width="100">Email</th>
                <th width="100">Type</th>
                <th width="130">Action</th>
            </tr>
        <tbody>

            @foreach ($users as $user)
                <tr>


                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->type }}</td>

                    <td>


                        <form method="POST" action="{{ route('users.destroy', $user->id) }}">
                            @csrf
                            @method('DELETE')

                            <button class="btn btn-xs btn-danger"><i class="ace-icon fa fa-trash-o bigger-120">
                                </i></button>


                        </form>
                        <a class="btn btn-xs btn-info" href="{{ route('users.edit', $user->id) }}">
                            <i class="ace-icon fa fa-pencil bigger-120"> </i>
                        </a>
                    </td>

                </tr>
            @endforeach



        </tbody>
    </table>
@endsection
