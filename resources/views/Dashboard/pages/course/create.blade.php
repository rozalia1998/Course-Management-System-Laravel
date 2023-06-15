
@extends('dashboard.layout.form')


@section('form_input')
    <form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data" action="{{ route('course.store') }}">
        @csrf
    
   
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

                                    <label class="col-sm-3 control-label no-padding-right" for="name"> Name
                                    </label>
                                    <div class="col-sm-6">
                                        <input class="col-xs-10 col-sm-20" type="text" name="name" id="name">
                                        @error('name')
                                            <div>{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">

                                    <label class="col-sm-3 control-label no-padding-right" for="price"> Price
                                    </label>
                                    <div class="col-sm-6">
                                        <input class="col-xs-10 col-sm-50" type="number" name="price" id="price" >
                                        @error('name')
                                            <div>{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                    

                                </div>

                             

                                <!-- /section:custom/scrollbar.horizontal -->
                                {{-- </div> --}}
                        

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
