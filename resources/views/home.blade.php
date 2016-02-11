@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">@lang('home.Dashboard')</div>

                <div class="panel-body">
                    @lang('messages.LoggedIn')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
