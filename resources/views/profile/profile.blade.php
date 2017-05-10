@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        <table class="table table-striped table-hover">
                            <tbody>
                            <tr>
                                <td class="col-md-2"><b>Full Name</b></td>
                                <td>{{ $profile->full_name }}</td>
                            </tr>
                            <tr>
                                <td class="col-md-2"><b>Birthday</b></td>
                                <td>{{ $profile->birthday }}</td>
                            </tr>
                            <tr>
                                <td class="col-md-2"><b>E-mail</b></td>
                                <td>{{ $profile->e_mail }}</td>
                            </tr>
                            <tr>
                                <td class="col-md-2"><b>Phone</b></td>
                                <td>{{ $profile->phone }}</td>
                            </tr>
                            <tr>
                                <td class="col-md-2"><b>Github</b></td>
                                <td>{{ $profile->github }}</td>
                            </tr>
                            <tr>
                                <td class="col-md-2"><b>About</b></td>
                                <td>{{ $profile->about }}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection