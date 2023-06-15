@extends('dashboard.layout.form')


@section('form_input')
    <form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data"
        action="{{ route('users.update', $user->id) }}">
        @csrf

        @method('PUT')

        <div class="widget-box transparent">
            <div class="widget-header">


                <div class="widget-toolbar no-border">

                </div>
            </div>


            <div class="widget-body">
                <div class="widget-main padding-12 no-padding-left no-padding-right">
                    <div class="widget-main">
                        <div class="tab-content padding-4">

                            <div>
                                <div class="form-group">
                                    <label for="type">Type</label>
                                    <select id="type" name="type" required>
                                        <option value="">Select a Type</option>
                                        <option value="student">Student</option>
                                        <option value="user">User</option>
                                    </select>
                                </div>


                            </div>

                        </div>


                    </div>
                </div>
            </div>
        </div>



        <div class="form-group">
            <div class="col-sm-6 control-label no-padding-right">
                <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-save"></i>save</button>
            </div>
        </div>
    </form>
@endsection
