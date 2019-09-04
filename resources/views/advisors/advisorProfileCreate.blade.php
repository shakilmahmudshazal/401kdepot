@extends('layouts.master')

@section("content")

    <h1> Create New Profile Pic</h1>
    <div class="row">
        <div class="col-sm-8">

            <form method="post" action="{{url('/save-profile')}}" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="profile_pic">Profile Pic</label> </br>
                    <input type="file" name="profile_pic">
                </div>

                <a  class="btn btn-danger m-t-15 waves-effect" href="{{ route('home') }}">BACK</a>
                <button type="submit" class="btn btn-primary">Save</button>
                @include('layouts.errors')
            </form>
        </div>


    </div>




@endsection