@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Admin Dashboard</div>

                <div class="panel-body">
                    You are logged in as Admin!
                    <form action="{{ route('admin.logout') }}" method="POST">
                        {{ csrf_field() }}
                        <button type="submit">Logout</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
