@extends('dashboard.layout.dashboard')

@section('content')
    <!-- div.table-responsive -->

    <!-- div.dataTables_borderWrap -->
    <div class="widget-toolbar">

        <div class="d-none d-md-block">

        
                <a href=""
                    class="btn btn-primary btn-xs"><i
                        class="ace-icon fa fa-plus"></i>Creat</a>
        
        </div>
    </div>
        <table id="dynamic-table" class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th width="100">Name</th>
                    <th width="100">Email</th>
                </tr>
            <tbody>

                @foreach ($users as $user)
                    <tr>


                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        


                    </tr>
                @endforeach



            </tbody>
        </table>


  
@endsection