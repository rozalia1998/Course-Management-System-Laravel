@extends('layouts.app')

@section('content')
    <form role="form" method="POST" enctype="multipart/form-data"
        action="{{ route('corses.store') }}">
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
                                <center>
                                <div class="form-group">
                                    <label for="course" style="width: 56px">Courses</label>
                                    {{-- <input type="hidden" name="id" value="{{ Auth::id() }}"/> --}}
                                    <select id="course" name="course" required>
                                        <option value="">Select a course</option>
                                        @foreach ($courses as $course)
                                        <option value="{{ $course->id }}"> {{ $course->name }}</option>

                                        @endforeach

                                    </select>
                                </div>

                                </center><br><br>
                            </div>

                        </div>


                    </div>
                </div>
            </div>
        </div>

<center>
        <div class="form-group">
            <div class="col-sm-6 control-label no-padding-right">
                <button type="submit" class="course-enroll-button"><i class="fa fa-save"></i>save</button>
            </div>
        </div>
</center>
    </form>
@endsection
