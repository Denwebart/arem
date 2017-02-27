@extends('layouts.main')

@section('content')
    <div class="panel panel-default">
        <div class="panel-body">
            {{ Request::path() }}
        </div>
    </div>
@endsection
