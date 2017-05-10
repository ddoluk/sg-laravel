@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>
                    <div class="panel-body">
                        <form action="{{ route('profile.update',[auth()->user()->username, $profile->id]) }}"
                             method="post" role="form">
                            {{ csrf_field() }}
                            {{method_field('PUT')}}

                            <legend>Profile</legend>
                            @include('common.errors')
                            <div class="form-group">
                                <label for="full_name">FullName</label>
                                <input type="text" class="form-control" name="full_name" id="full_name"
                                       value="{{$profile->full_name}}" required>
                            </div>

                            <div class="form-group">
                                <label for="birthday">Birthday</label>
                                <input type="date" class="form-control" name="birthday" id="birthday"
                                       value="{{$profile->birthday}}" required>
                            </div>

                            <div class="form-group">
                                <label for="e_mail">E-mail</label>
                                <input type="email" class="form-control" name="e_mail" id="e_mail"
                                       value="{{$profile->e_mail}}" required>
                            </div>

                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="text" class="form-control" name="phone" id="phone"
                                       value="{{$profile->phone}}" required>
                            </div>

                            <div class="form-group">
                                <label for="github">Github</label>
                                <input type="text" class="form-control" name="github" id="github"
                                       value="{{$profile->github}}" required>
                            </div>

                            <div class="form-group">
                                <label for="about">About</label>
                                <textarea class="form-control" name="about" id=""
                                          rows="5">{{ $profile->about }}</textarea>
                            </div>


                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection