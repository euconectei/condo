@extends('layouts.app')
@section('content')
    <h1>@lang('report.Create')</h1>
    <form action="{{ url('/reports') }}" method="post" class="form-horizontal">
        {!! csrf_field() !!}
        <div class="form-group">
            <label for="id_reported" class="col-lg-2 control-label">@lang('report.Reported')</label>
            <div class="col-lg-10">
                <select name="id_reported" id="id_reported" class="form-control">
                    @foreach($patrimonies as $patrimony)
                        <option value="{{ $patrimony->id }}">{{ $patrimony->block }} - {{ $patrimony->number }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="report" class="col-lg-2 control-label">@lang('report.Report')</label>
            <div class="col-lg-10">
                <textarea name="report" id="report" cols="30" rows="10" class="form-control"></textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-10 col-lg-offset-2">
                <input type="submit" class="btn btn-primary">
            </div>
        </div>
    </form>
@endsection