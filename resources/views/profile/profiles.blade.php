@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>
                    <div class="panel-body">
                        @foreach($users as $user)
                            <p>{{ $user->name }}</p>
                            @foreach($profiles as $profile)
                                @if($user->id == $profile->user_id)
                                    <ul>
                                        <li>
                                            <a href="{{ route('one.profile', $profile->id) }}">
                                                {{ $profile->full_name  }}
                                            </a>
                                        </li>
                                    </ul>
                                @endif
                            @endforeach
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection