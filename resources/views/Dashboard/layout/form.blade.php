@extends('dashboard.layout.dashboard')




@section('content')
    <div class="row">
        <div class="col-xs-13">
            @if ($message = \Session::get('error'))
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @endif
            <form class="form-horizontal" role="form"
                action="{{ isset($item) ? route($module_name . '.update', $item->id) : route($module_name . '.store') }}"
                method="POST" enctype="multipart/form-data">
                @csrf
                @if (isset($item))
                    @method('PUT')
                @endif
                <div class="widget-box transparent">
                    <div class="widget-header">


                        <div class="widget-toolbar no-border">

                        </div>
                    </div>


                    <div class="widget-body">
                        <div class="widget-main padding-12 no-padding-left no-padding-right">
                            @yield('form_input')
                        </div>
                    </div>
                </div>



                <div class="form-group">
                    <div class="col-sm-6 control-label no-padding-right">
                        <button type="submit" class="btn btn-sm btn-primary"><i
                                class="fa fa-save"></i>{{ trans('dashboard.save') }}</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
