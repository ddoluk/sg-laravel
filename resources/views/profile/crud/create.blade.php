@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>
                    <div class="panel-body">
                        <form action="{{ route('profile.store', auth()->user()->username) }}" method="post" role="form">
                            <legend>Profile</legend>
                            @include('common.errors')
                            <div class="form-group">
                                <label for="full_name">FullName</label>
                                <input type="text" class="form-control" name="full_name" id="full_name" required>
                            </div>

                            <div class="form-group">
                                <label for="birthday">Birthday</label>
                                <input type="date" class="form-control" name="birthday" id="birthday" required>
                            </div>

                            <div class="form-group">
                                <label for="e_mail">E-mail</label>
                                <input type="email" class="form-control" name="e_mail" id="e_mail" required>
                            </div>

                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="text" class="form-control" name="phone" id="phone" required>
                            </div>

                            <div class="form-group">
                                <label for="github">Github</label>
                                <input type="text" class="form-control" name="github" id="github" required>
                            </div>

                            <div class="form-group">
                                <label for="about">About</label>
                                <textarea class="form-control" name="about" id="" rows="5"></textarea>
                            </div>

                            {{ csrf_field() }}

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection