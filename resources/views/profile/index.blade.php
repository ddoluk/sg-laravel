@extends('layouts.app')

@section('content')
    @php($username = auth()->user()->username)
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>
                    <div class="panel-body">
                        <div class="text-center">
                            <a href="{{ route('profile.create', $username) }}" class="btn btn-primary">
                                Add Profile
                            </a>
                        </div>
                        <br>
                        <table class="table">
                            @foreach($profiles as $profile)
                                <tr>
                                    <td>
                                        <a href="{{ route('profile.show', [ $username, $profile->id ]) }}">
                                            {{ $profile->full_name  }}
                                        </a>
                                    </td>
                                    <td>
                                        <a href="{{ route('profile.edit',[$username, $profile->id]) }}"
                                           class="btn btn-default">
                                            Edit
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection